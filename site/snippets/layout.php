<!DOCTYPE html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="Pereng Dawe, berita desa, galeri, informasi">
  <meta name="robots" content="index, follow">
  <meta property="og:type" content="website">
  <title><?php e($page->isHomePage() , $site->title(), $page->title()." | ".$site->title()) ?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="/assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">
  <?= css([
    'assets/css/index.css',
    'assets/css/style.css'
  ]) ?>
  <?= js('assets/js/index.js') ?>
  <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer></script>
</head>
<body class="d-flex flex-column min-vh-100">
  <?php snippet('header') ?>
  <main class="mb-2 mb-lg-3">
    <?= $slot ?>
  </main>
  <?php snippet('footer') ?>
</body>
</html>