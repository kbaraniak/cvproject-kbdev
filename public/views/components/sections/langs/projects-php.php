<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 place-items-center w-full">
  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = 'https://raw.githubusercontent.com/kbaraniak/kbdev/main/public/img/thumbnails/mvlist.jpeg'; ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-center justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="MVList preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">MVList</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">MVList (PHP + MySQL)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Projekt backendowy z naciskiem na model danych, relacje i wydajne zapytania SQL.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">PHP, MySQL, Auth, MVC</p>
      <div class="flex gap-2">
        <a href="https://archived-projects.kbdev.run/mvlist" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="https://github.com/klubuntu-backup1/mvlist" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = 'https://raw.githubusercontent.com/kbaraniak/kbdev/main/public/img/thumbnails/odliczamydo-pl.jpeg'; ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-center justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="Odliczamydo preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">Odliczamydo</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">Odliczamydo.pl (PHP)</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Gotowy produkt dla użytkownika końcowego z szybkim i stabilnym delivery.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">PHP, Product Delivery, SEO Basics</p>
      <div class="flex gap-1">
        <a href="#" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a>
        <a href="#" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>

  <article class="card overflow-hidden rounded-lg border border-slate-800 bg-slate-900/80 shadow-[0_18px_40px_rgba(2,6,23,0.38)] opacity-0 translate-y-5 transition-all duration-300 hover:-translate-y-1 hover:border-slate-600 w-[318px] h-[400px] flex flex-col">
    <?php $thumb = 'https://raw.githubusercontent.com/kbaraniak/kbdev/main/public/img/thumbnails/pg-order-returns.jpeg'; ?>
    <div class="relative flex-shrink-0 h-[180px] overflow-hidden border-b border-slate-800 flex items-center justify-center <?php echo $thumb ? 'bg-slate-900/60' : 'bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800'; ?>">
      <?php if ($thumb): ?>
        <img src="<?php echo $thumb; ?>" alt="pg-order-returns-php preview" class="absolute inset-0 w-full h-full object-cover object-center z-0" />
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(2,6,23,0.18)_0_1px,transparent_1px_16px)] opacity-30 z-10"></div>
      <?php else: ?>
        <div class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(148,163,184,0.05)_0_1px,transparent_1px_16px)] opacity-50"></div>
        <span class="absolute inset-0 flex items-center justify-center z-20 text-slate-50 font-mono text-xs font-semibold">pg-order-returns</span>
      <?php endif; ?>
    </div>
    <div class="grid gap-2 p-2 flex-1 overflow-y-auto flex flex-col">
      <h3 class="text-base font-semibold text-slate-50 text-center">pg-order-returns-php</h3>
      <p class="text-xs leading-5 text-slate-300 flex-1">Pełnofunkcyjna aplikacja do zarządzania zamówieniami i zwrotami towarów z bazą PostgreSQL i interfejsem Livewire.</p>
      <p class="font-mono text-xs font-medium leading-relaxed text-sky-300">Laravel, Livewire, PostgreSQL</p>
      <div class="flex gap-1">
        <!-- <a href="#" class="flex-1 flex items-center justify-center rounded bg-slate-700 px-2 py-1 text-sm font-semibold text-white transition hover:bg-slate-600">Live Demo</a> -->
        <a href="https://github.com/kbaraniak/pg-order-returns-php" class="flex-1 flex items-center justify-center rounded border border-slate-700 bg-slate-950/70 px-2 py-1 text-xs font-semibold text-slate-200 transition hover:border-slate-600 hover:bg-slate-900">GitHub</a>
      </div>
    </div>
  </article>
</div>
