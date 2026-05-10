<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center w-full">
  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = 'https://github.com/kbaraniak/librusCLI/assets/90936580/533a708a-319f-4fcf-8e48-e9f011bc7fcc'; ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="librus-api-rewrited preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">Librus API</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">Librus API (Node.js)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Nieoficjalna biblioteka API do komunikacji z systemem Librus Synergia, umożliwiająca programistyczną integrację z dziennikiem szkolnym.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Node.js, API, Librus</p>
      <div class="flex gap-2">
        <a href="https://github.com/kbaraniak/librus-api-rewrited/releases/latest" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/kbaraniak/librus-api-rewrited" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = 'https://raw.githubusercontent.com/kbaraniak/kbdev/main/public/img/thumbnails/revostream.jpeg'; ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="revo-website preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">RevoStream</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">RevoStream Website</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Oficjalna strona internetowa projektu RevoStream stworzona na Vite z interfejsem pokazującym możliwości aplikacji.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Vite, HTML, CSS, JavaScript</p>
      <div class="flex gap-2">
        <a href="https://revostream.in" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/RevoProject/revo-website" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = ''; /* set thumbnail URL here if available */ ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="tipply preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">Tipply Goal</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">Tipply Goal Widget</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Elegancki widget do wyświetlania postępu celu donacji na platformie Tipply wspierający różne motywy.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Fastify, JavaScript, Widget</p>
      <div class="flex gap-2">
        <a href="https://github.com/Klubuntu/tipply-goal-remaining" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = ''; /* set thumbnail URL here if available */ ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="MG-DC preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">MG-DC Bot</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">MG-DC Discord Bot</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Wszechstronny bot Discord do odtwarzania muzyki z obsługą wielu usług streamingu i wielojęzycznym interfejsem użytkownika.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Discord.js, JavaScript, Bot</p>
      <div class="flex gap-2">
        <a href="https://github.com/Klubuntu/MG-DC" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>
</div>
