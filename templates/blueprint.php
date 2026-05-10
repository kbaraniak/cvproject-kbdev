<!doctype html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="My best projects for CV" />
  <title>Blueprint - CV Projects</title>

  <!-- Use local compiled Tailwind CSS to avoid render-blocking CDN load -->
  <link rel="preload" href="/assets/css/app.css" as="style" onload="this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="/assets/css/app.css"></noscript>

  <!-- Load Google Fonts non-blocking -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=JetBrains+Mono:wght@400;600&display=swap" as="style" onload="this.rel='stylesheet'">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.min.js" defer></script>
  <noscript><link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet"></noscript>
  <style>
    html {
      height: 100%;
    }
    * {
      font-family: "Space Grotesk", sans-serif;
    }
    .font-mono {
      font-family: "JetBrains Mono", monospace;
    }
    .blueprint-grid {
      background-image:
        linear-gradient(rgba(148, 163, 184, 0.08) 1px, transparent 1px),
        linear-gradient(90deg, rgba(148, 163, 184, 0.08) 1px, transparent 1px);
      background-size: 26px 26px;
    }
    .scanline {
      background: linear-gradient(
        to bottom,
        rgba(32, 128, 255, 0),
        rgba(32, 128, 255, 0.1),
        rgba(32, 128, 255, 0)
      );
    }
    .scanline.active {
      animation: scanner 1.4s ease forwards;
    }
    @keyframes scanner {
      0% { transform: translateY(-30%); opacity: 0; }
      20% { opacity: 1; }
      85% { opacity: 0.85; }
      100% { transform: translateY(145%); opacity: 0; }
    }
    @keyframes riseIn {
      to { opacity: 1; transform: translateY(0) scale(1); filter: saturate(1); }
    }
    .card.revealed {
      animation: riseIn 0.68s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }
  </style>
</head>
<body class="min-h-full bg-gradient-to-b from-slate-950 via-slate-900 to-black text-slate-100 overflow-x-hidden">
  <!-- Blueprint grid background -->
  <div class="fixed inset-0 z-0 blueprint-grid opacity-30 pointer-events-none"></div>
  
  <!-- Radial gradient blobs -->
  <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-slate-700 rounded-full opacity-10 blur-3xl"></div>
    <div class="absolute top-1/3 right-0 w-80 h-80 bg-slate-600 rounded-full opacity-10 blur-3xl"></div>
    <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-slate-700 rounded-full opacity-5 blur-3xl"></div>
  </div>

  <?php
  // Włącz/wyłącz loader
  $showLoader = $showLoader ?? true;
  if ($showLoader) {
    include 'loading.php';
  }
  ?>

  <main class="relative z-10 max-w-5xl mx-auto px-6 md:px-8 py-24 md:py-32" id="app" <?php echo $showLoader ? 'aria-hidden="true" inert' : ''; ?>>
    <?php if (isset($hero)): ?>
      <section class="space-y-6 mb-12">
        <?php if (!empty($hero['eyebrow'])): ?>
          <p class="font-mono text-xs md:text-sm font-semibold tracking-widest uppercase text-slate-400">
            <?php echo htmlspecialchars($hero['eyebrow']); ?>
          </p>
        <?php endif; ?>

        <?php if (!empty($hero['title'])): ?>
          <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight text-slate-50 max-w-2xl">
            <?php echo htmlspecialchars($hero['title']); ?>
          </h1>
        <?php endif; ?>

        <?php if (!empty($hero['paragraphs'])): ?>
          <p class="text-lg md:text-xl leading-relaxed text-slate-300 max-w-3xl space-y-2">
            <?php foreach ($hero['paragraphs'] as $para): ?>
              <span class="block">
                <?php echo htmlspecialchars($para); ?>
              </span>
            <?php endforeach; ?>
          </p>
        <?php endif; ?>

        <?php if (!empty($hero['tags'])): ?>
          <div class="flex flex-wrap gap-2 pt-2">
            <?php foreach ($hero['tags'] as $tag): ?>
              <span class="px-3 py-1 border border-slate-600/50 bg-slate-900/70 font-mono text-xs md:text-sm font-semibold text-slate-200 rounded-full">
                <?php echo htmlspecialchars($tag); ?>
              </span>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </section>
    <?php endif; ?>

    <!-- Injected content: projekty, sekcje, etc -->
    <div class="space-y-16">
      <?php echo $content ?? ''; ?>
    </div>
  </main>
</body>
</html>
