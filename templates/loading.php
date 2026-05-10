<?php
// Loader, grid, scanline - oddzielny template
?>
<div class="fixed inset-0 z-[-2] blueprint-grid opacity-30" aria-hidden="true"></div>
<div class="fixed inset-0 z-[-1] pointer-events-none overflow-hidden" aria-hidden="true">
  <div class="absolute top-0 left-1/4 w-96 h-96 rounded-full bg-slate-700/20 blur-3xl"></div>
  <div class="absolute top-1/3 right-0 w-80 h-80 rounded-full bg-slate-600/10 blur-3xl"></div>
  <div class="absolute bottom-0 left-1/2 w-96 h-96 rounded-full bg-slate-700/10 blur-3xl"></div>
</div>

<div class="scanline fixed inset-x-0 top-0 z-20 h-[130vh] pointer-events-none opacity-0" id="scanline" aria-hidden="true"></div>

<div class="fixed inset-0 z-50 grid place-items-center bg-slate-950 text-slate-100 transition-opacity duration-700 isolation-isolate" id="loader" role="status" aria-live="polite">
  <div class="w-[min(520px,92vw)] overflow-hidden rounded-xl border border-blue-500/55 bg-slate-900 shadow-[0_20px_50px_rgba(2,6,23,0.8)] ring-1 ring-blue-400/15">
    <div class="flex items-center justify-between border-b border-blue-500/25 bg-slate-950/65 px-4 py-3 font-mono text-xs font-semibold uppercase tracking-[0.14em] text-slate-100">
      <span>Code Build Sequence</span>
      <span id="loader-percent">0%</span>
    </div>
    <div class="grid gap-3 p-4">
      <div class="min-h-[96px] font-mono text-sm leading-6 text-slate-200" id="loader-log">Initializing blueprint matrix...</div>
      <div class="h-2 w-full overflow-hidden rounded-full border border-blue-500/30 bg-slate-800">
        <div class="h-full w-0 rounded-full bg-gradient-to-r from-blue-500 via-cyan-400 to-blue-300 transition-[width] duration-700 ease-out" id="loader-bar"></div>
      </div>
    </div>
  </div>
</div>

<script>
  (function () {
    const loader = document.getElementById("loader");
    const bar = document.getElementById("loader-bar");
    const percent = document.getElementById("loader-percent");
    const log = document.getElementById("loader-log");
    const scanline = document.getElementById("scanline");
    const app = document.getElementById("app");
    const cards = Array.from(document.querySelectorAll(".card"));

    const steps = [
      "Compiling layout vectors...",
      "Linking project modules...",
      "Calibrating responsive grid...",
      "Injecting visual layers...",
      "Blueprint ready"
    ];

    let current = 0;
    let value = 0;

    const pulse = setInterval(() => {
      value += 4;
      percent.textContent = Math.min(value, 100) + "%";
      if (value % 20 === 0 && current < steps.length) {
        log.textContent = steps[current];
        current += 1;
      }
      if (value >= 100) {
        clearInterval(pulse);
      }
    }, 58);

    window.addEventListener("load", () => {
      bar.style.width = "100%";

      setTimeout(() => {
        loader.classList.add("hidden");
        if (app) app.setAttribute("aria-hidden", "false");
        scanline.classList.add("active");

        cards.forEach((card, index) => {
          setTimeout(() => card.classList.add("revealed"), 160 + index * 130);
        });
      }, 1550);
    });
  })();
</script>
