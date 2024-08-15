<?php
  /*
  Exclude items in the first block
  if they are images block
  to be used as cover/header images
  */
  
  $blocks = $page->body()->toBlocks();

  if ($firstBlock = $blocks->first()) {
    if ($firstBlock->type() === 'image') {
      $image = $firstBlock->content()->image()->toFile();
      $blocks->remove($firstBlock->id());
    }
  }
?>

<?php snippet('layout', slots: true) ?>
  <section class="container-lg px-4 py-4 pb-5 py-lg-5">
    <div class="row">
      <article class="col-md-8 mx-auto">
        <h1 class="fs-2 fw-bold m-0"><?= $page->title()->esc() ?></h1>
        <hr class="border-primary border-3 mt-2 mb-1" style="opacity: 1; width: 48px">
        <?php if (isset($image)): ?>
          <img
            class="post__img rounded mt-4"
            src="<?= esc($image->url()) ?>"
            alt="<?= $image->alt() ?>"
          >
        <?php endif ?>
        <div class="prose page-default">
          <?= $blocks ?>
        </div>
      </article>
    </div>
  </section>
  <?= js('assets/js/iframe-loader.js') ?>
<?php endsnippet() ?>
