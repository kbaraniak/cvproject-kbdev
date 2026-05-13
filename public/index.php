<?php
// Sekcja hero
$hero = [
  'eyebrow' => 'Portfolio Blueprint',
  'title' => 'Wybrane projekty, które pokazują realny warsztat.',
  'paragraphs' => [
    'Strona startuje jak szkic techniczny: najpierw linie i konstrukcja, potem treść.',
    'Rekruter od razu widzi projekty pod PHP, API i pracę produktową.'
  ]
];

// Capture dodatkowe sekcje (projekty, footer, etc.)
ob_start();
// include '../sections/projects.php';
// include '../sections/footer.php';
$content = ob_get_clean();

// Render blueprint template z injected zmiennymi i contentem
include '../templates/blueprint.php';
?>
