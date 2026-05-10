<?php

// Get client IP address (handles proxies and CloudFlare)
$ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? 
      $_SERVER['HTTP_X_FORWARDED_FOR'] ?? 
      $_SERVER['REMOTE_ADDR'];

// Use only the first IP if multiple are present
if (strpos($ip, ',') !== false) {
    $ips = array_map('trim', explode(',', $ip));
    $ip = $ips[0];
}

// Generate unique visitor identifier from IP + User-Agent hash
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
$visitorId = hash('sha256', $ip . '|' . $userAgent);

// Connect to Redis
try {
    $redis = new Redis();
    $redis->connect('redis', 6379);
    
    // Store visitor in a set (ensures uniqueness)
    $redis->sAdd('visitors', $visitorId);
    
    // Get total unique visitor count
    $totalVisitors = $redis->sCard('visitors');
    
    header('Content-Type: application/json');
    echo json_encode([
        'count' => $totalVisitors,
        'status' => 'success'
    ]);
} catch (Exception $e) {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode([
        'count' => 0,
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
