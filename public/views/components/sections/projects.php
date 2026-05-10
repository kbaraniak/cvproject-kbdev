<?php
// Sekcja - Wybrane Projekty
?>

<section>
  <h2 class="text-3xl md:text-4xl font-bold text-slate-50 mb-2">Wybrane Projekty</h2>
  <p class="text-slate-400 text-base md:text-lg mb-5">Kliknij badge, aby zmienić kategorię projektów</p>
  <div class="flex flex-wrap gap-2 mb-8" data-project-tabs>
    <button type="button" data-project-filter="php" class="inline-flex items-center px-4 py-2 rounded-full border border-blue-400/40 bg-blue-400/10 text-blue-200 text-sm font-semibold tracking-wide font-mono transition-all duration-200 hover:-translate-y-0.5 hover:bg-blue-300 hover:text-slate-950 hover:border-blue-200">PHP</button>
    <button type="button" data-project-filter="nextjs" class="inline-flex items-center px-4 py-2 rounded-full border border-slate-700 bg-slate-900/80 text-slate-200 text-sm font-semibold tracking-wide font-mono transition-all duration-200 hover:-translate-y-0.5 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-900">Next.js</button>
    <button type="button" data-project-filter="node" class="inline-flex items-center px-4 py-2 rounded-full border border-slate-700 bg-slate-900/80 text-slate-200 text-sm font-semibold tracking-wide font-mono transition-all duration-200 hover:-translate-y-0.5 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-900">Node</button>
    <button type="button" data-project-filter="python" class="inline-flex items-center px-4 py-2 rounded-full border border-slate-700 bg-slate-900/80 text-slate-200 text-sm font-semibold tracking-wide font-mono transition-all duration-200 hover:-translate-y-0.5 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-900">Python</button>
    <button type="button" data-project-filter="rust" class="inline-flex items-center px-4 py-2 rounded-full border border-slate-700 bg-slate-900/80 text-slate-200 text-sm font-semibold tracking-wide font-mono transition-all duration-200 hover:-translate-y-0.5 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-900">Rust</button>
    <button type="button" data-project-filter="react" class="inline-flex items-center px-4 py-2 rounded-full border border-slate-700 bg-slate-900/80 text-slate-200 text-sm font-semibold tracking-wide font-mono transition-all duration-200 hover:-translate-y-0.5 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-900">React</button>
  </div>
  <div class="space-y-6" data-project-panels>
    <div data-project-panel="php">
      <?php include __DIR__ . '/langs/projects-php.php'; ?>
    </div>

    <div data-project-panel="nextjs" hidden>
      <?php include __DIR__ . '/langs/projects-nextjs.php'; ?>
    </div>

    <div data-project-panel="node" hidden>
      <?php include __DIR__ . '/langs/projects-node.php'; ?>
    </div>

    <div data-project-panel="python" hidden>
      <?php include __DIR__ . '/langs/projects-python.php'; ?>
    </div>

    <div data-project-panel="rust" hidden>
      <?php include __DIR__ . '/langs/projects-rust.php'; ?>
    </div>

    <div data-project-panel="react" hidden>
      <?php include __DIR__ . '/langs/projects-react.php'; ?>
    </div>
  </div>

  <script>
    (function () {
      const tabs = Array.from(document.querySelectorAll("[data-project-filter]"));
      const panels = Array.from(document.querySelectorAll("[data-project-panel]"));

      if (!tabs.length || !panels.length) {
        return;
      }

      const animateCards = (panelElement) => {
        const cards = panelElement.querySelectorAll(".card");
        cards.forEach((card, index) => {
          card.classList.remove("revealed");
          // Stagger the animation for each card
          setTimeout(() => {
            card.classList.add("revealed");
          }, index * 80);
        });
      };

      const setActive = (name) => {
        tabs.forEach((tab) => {
          const active = tab.dataset.projectFilter === name;
          tab.classList.toggle("bg-blue-300", active);
          tab.classList.toggle("text-slate-950", active);
          tab.classList.toggle("border-blue-200", active);
          tab.classList.toggle("bg-slate-900/80", !active);
          tab.classList.toggle("text-slate-200", !active);
          tab.classList.toggle("border-slate-700", !active);
          tab.setAttribute("aria-pressed", String(active));
        });

        panels.forEach((panel) => {
          const isActive = panel.dataset.projectPanel === name;
          panel.hidden = !isActive;
          
          if (isActive) {
            requestAnimationFrame(() => animateCards(panel));
          }
        });
      };

      tabs.forEach((tab) => {
        tab.addEventListener("click", () => setActive(tab.dataset.projectFilter));
      });

      // On first load, animate the first panel
      requestAnimationFrame(() => {
        const firstPanel = panels.find(p => p.dataset.projectPanel === "php");
        if (firstPanel) animateCards(firstPanel);
      });

      setActive("php");
    })();
  </script>
</section>
