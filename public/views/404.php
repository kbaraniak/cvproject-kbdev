<?php
ob_start();
header("HTTP/1.0 404 Not Found");

$hero = [
  'eyebrow' => '404 - Not Found',
  'title' => 'Tu nie znajdziesz już projektów',
  'paragraphs' => [
    'Ale, możesz zawsze zostać',
    'I poszukać np coś na githubie.'
  ]
];

// Wyłącz loader dla 404 (bez animacji)
$showLoader = false;

// GitHub badges with Tailwind styling
$content = <<<HTML
<div class="flex flex-col sm:flex-row gap-4 sm:gap-5 mt-12 justify-center flex-wrap">
  <a href="https://github.com/kbaraniak" class="github-badge-link" target="_blank" rel="noopener noreferrer">
    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
      <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
    </svg>
    <span>Private GitHub</span>
  </a>
  <a href="https://github.com/klubuntu" class="github-badge-link" target="_blank" rel="noopener noreferrer">
    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
      <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
    </svg>
    <span>Public GitHub</span>
  </a>
</div>

<div style="margin-top: 2rem; text-align: center;">
  <a href="/" class="home-button">
    ← lub wrócić na początek
  </a>
</div>

<style>
  .github-badge-link {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.25rem;
    border: 2px solid #1e293b;
    border-radius: 0.5rem;
    background: rgba(255, 255, 255, 0.9);
    color: #1e293b;
    font-weight: 600;
    font-size: 0.875rem;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  .github-badge-link:hover {
    border-color: #2563eb;
    background: #eff6ff;
    color: #2563eb;
    transform: translateY(-2px);
  }
  .home-button {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(90deg, #1f77ff, #00b8d4);
    color: white;
    text-decoration: none;
    border-radius: 0.5rem;
    font-weight: 600;
    font-size: 0.95rem;
    transition: all 0.3s ease;
  }
  .home-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(31, 119, 255, 0.3);
  }
  @media (max-width: 640px) {
    .github-badge-link {
      justify-content: center;
      width: 100%;
    }
  }
</style>
HTML;

include '../templates/blueprint.php';
?>