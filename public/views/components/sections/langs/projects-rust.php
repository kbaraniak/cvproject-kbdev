<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center w-full">
  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = ''; /* set thumbnail URL here if available */ ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="revo-stream preview" class="absolute inset-0 w-full h-full object-cover object-center z-0 select-none" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">RevoStream</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">RevoStream (Rust)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Nowoczesna aplikacja do streamingu na żywo dla streamerów i zespołów produkcji z natywnym backendem OBS.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Rust, Tauri, OBS, Streaming</p>
      <div class="flex gap-2">
        <a href="#" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/RevoProject/revo-stream" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = ''; /* set thumbnail URL here if available */ ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="back-to-asm-with-rust preview" class="absolute inset-0 w-full h-full object-cover object-center z-0 select-none" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">Back to ASM</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">Back to Assembly (Rust)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Edukacyjny projekt do nauki programowania niskiego poziomu łączący Rust z Assemblerem, tworzący bootowalne obrazy systemów.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Rust, Assembly, Kernel</p>
      <div class="flex gap-2">
        <a href="#" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/Klubuntu/back-to-asm-with-rust" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = ''; /* set thumbnail URL here if available */ ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="easycookie-rs preview" class="absolute inset-0 w-full h-full object-cover object-center z-0 select-none" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">EasyCookie RS</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">EasyCookie (Rust)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Przyjazna biblioteka Rust do łatwego pobierania i przetwarzania ciasteczek HTTP z nagłówków odpowiedzi.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Rust, HTTP, Library</p>
      <div class="flex gap-2">
        <a href="#" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/Klubuntu/easycookie-rs" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = ''; /* set thumbnail URL here if available */ ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-start justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="librus-api preview" class="absolute inset-0 w-full h-full object-cover object-center z-0 select-none" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">Librus API</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">Librus API (Rust)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Nieoficjalna biblioteka Rust do komunikacji z API systemu Librus, umożliwiająca dostęp do danych szkolnych.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Rust, API, Librus</p>
      <div class="flex gap-2">
        <a href="#" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/kbaraniak/librus-api" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>
</div>
