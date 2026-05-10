<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center w-full">
  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = 'https://raw.githubusercontent.com/Klubuntu/recap-messenger/main/img/banner.png';  ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="recap-messenger preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">Recap Messenger</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">Recap Messenger (Python)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Narzędzie analityczne do przetwarzania danych wiadomości Facebook Messenger z funkcjami filtrowania i statystyki.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Python, CLI, Analytics</p>
      <div class="flex gap-2">
        <a href="https://github.com/Klubuntu/recap-messenger/releases/latest" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/Klubuntu/recap-messenger" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = 'https://user-images.githubusercontent.com/49614906/152023865-ceecfad5-41a7-4f53-a10e-3db8513a6d58.png'; ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="YST preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">YST</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">YST (Python)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Wszechstronne narzędzie do pobierania i analizy statystyk YouTube kanałów i filmów, dostępne z GUI i CLI.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Python, YouTube API, CLI</p>
      <div class="flex gap-2">
        <a href="https://github.com/Klubuntu/YST/releases/latest" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/Klubuntu/YST" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>
</div>
