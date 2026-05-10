#!/bin/bash
set -e

echo "🧪 Smoke Test - CV Projects"
echo "============================="

# Test 1: Check if app is running
echo "✓ Checking if app is running on http://localhost:8080..."
http_code=$(curl -s -o /dev/null -w "%{http_code}" http://localhost:8080/)
if [ "$http_code" == "200" ]; then
  echo "  ✅ App is accessible (HTTP 200)"
else
  echo "  ❌ App returned HTTP $http_code"
  exit 1
fi

# Test 2: Check counter API
echo "✓ Testing counter API..."
counter_response=$(curl -s http://localhost:8080/api/counter)
if echo "$counter_response" | grep -q '"count"'; then
  count=$(echo "$counter_response" | grep -o '"count":[0-9]*' | grep -o '[0-9]*')
  echo "  ✅ Counter API working (count: $count)"
else
  echo "  ❌ Counter API failed"
  exit 1
fi

# Test 3: Check if HTML contains required elements  
echo "✓ Checking HTML structure..."
html=$(curl -s http://localhost:8080/)

if echo "$html" | grep -q "data-project-filter"; then
  echo "  ✅ Project filter buttons present"
else
  echo "  ❌ Project filter buttons missing"
  exit 1
fi

if echo "$html" | grep -q 'id="app"'; then
  echo "  ✅ Main app element present"
else
  echo "  ❌ App element missing"
  exit 1
fi

if echo "$html" | grep -q "Wybrane Projekty"; then
  echo "  ✅ Content sections present"
else
  echo "  ❌ Content sections missing"
  exit 1
fi

# Test 4: Check CSS is loaded
echo "✓ Checking CSS loading..."
css_size=$(curl -s http://localhost:8080/assets/css/app.css | wc -c)
if [ "$css_size" -gt 1000 ]; then
  echo "  ✅ CSS file loaded ($css_size bytes)"
else
  echo "  ❌ CSS file too small or missing"
  exit 1
fi

echo ""
echo "✅ All smoke tests passed!"
