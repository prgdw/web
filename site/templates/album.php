<?php snippet('layout', slots: true) ?>
  <section class="container-lg px-4 py-4 pb-5">
    <noscript>
      <div class="alert alert-danger">
        <p class="m-0">Maaf, situs ini memerlukan JavaScript untuk berfungsi dengan baik. Mohon aktifkan JavaScript di pengaturan browser Anda atau gunakan browser yang lebih baru.</p>
      </div>
    </noscript>
    <?php snippet('breadcrumb') ?>
    <h1 class="fs-2 fw-bold mt-3"><?= $page->title()->esc() ?></h1>
    <div class="d-flex align-items-center mt-2 mb-3 text-slate">
      <svg class="flex-shrink-0 me-1" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M8 15h2v2h-2z" /></svg>
      <span><?= $page->published() ?></span>
    </div>
    <div class="mb-4">
      <?php snippet('post-tags', ['tags' => $tags]) ?>
    </div>
    <div id="mansory" class="row g-4">
      <?php foreach ($images as $image): ?>
      <div class="col-sm-6 col-lg-4">
        <a class="d-inline-block" href="<?= esc($image->url()) ?>" data-pswp-width="<?= $image->width() ?>" data-pswp-height="<?= $image->height() ?>">
          <img
            class="post__img rounded"
            src="<?= esc($image->url()) ?>"
            alt="<?= esc($image->alt(), 'attr') ?>"
          >
        </a>
      </div>
      <?php endforeach ?>
    </div>
    <?php snippet('pagination', ['collection' => $images]) ?>
    <?= js('assets/js/masonry.min.js') ?>
    <?= js('assets/js/imagesloaded.js') ?>
    <script>
      var grid = document.querySelector('#mansory');
      imagesLoaded(grid, function() {
        msnry = new Masonry( grid, {
          percentPosition: true
        });
      });
    </script>
    <?= css('assets/css/photoswipe.css') ?>
    <script type="module">
      import Lightbox from '/assets/js/photoswipe-lightbox.esm.min.js';
      const lightbox = new Lightbox({
        gallery: '#mansory',
        children: 'a',
        pswpModule: () => import('/assets/js/photoswipe.esm.min.js')
      });
      lightbox.init();
    </script>
  </section>
  <?php endsnippet() ?>