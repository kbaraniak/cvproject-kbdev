<?php

$hero = [
  'eyebrow' => 'CV Projects',
  'title' => 'Wybrane projekty, które pokazują realny warsztat',
  'paragraphs' => [
    'Od tych projektów zaczeła się cała przygoda',
    'Najpierw hobbistycznie, a póżniej już bardziej na poważnie'
  ]
];

$showLoader = true;

// Przygotuj injected content: w tym bloku wrzuca sekcje, które renderuje
ob_start();
include __DIR__ . '/components/counter.php';
include __DIR__ . '/components/sections/projects.php';
include __DIR__ . '/components/sections/other-projects.php';
// include dirname(__DIR__, 2) . '/templates/sections/footer.php';
$content = ob_get_clean();

// Render blueprint
$templatePath = dirname(__DIR__, 2) . '/templates/blueprint.php';
if (file_exists($templatePath)) {
  include $templatePath;
} else {
  echo "Template nie znaleziony: $templatePath";
}

// Render footer
include __DIR__ . '/components/sections/footer.php';