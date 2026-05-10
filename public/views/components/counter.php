<?php

// Licznik odwiedzeń
?>

<div class="fixed bottom-4 right-4 z-50 flex items-center gap-2 rounded bg-slate-800/80 px-3 py-1 text-xs font-mono text-slate-300 backdrop-blur-sm">
  <span class="text-sky-400">Stronę odwiedziło:</span>
  <span id="visit-count" class="font-bold text-sky-300">...</span>
  <span class="text-slate-400">osob/y</span>
</div>

<script>
  // Fetch visitor count from Redis via API
  // Use the routed path '/api/counter' (router handles includes); direct .php requests are rewritten
  fetch('/api/counter')
    .then(response => response.json())
    .then(data => {
      if (data.status === 'success') {
        document.getElementById('visit-count').textContent = data.count;
      }
    })
    .catch(error => {
      console.error('Error fetching visitor count:', error);
      document.getElementById('visit-count').textContent = '0';
    });
</script>