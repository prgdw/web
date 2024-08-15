<?php snippet('layout', slots: true) ?>
  <?php snippet('hero', ['featured' => $featured]) ?>
  
  <?php if (count($news) > 0): ?>
  <section class="container-lg px-4 py-5">
    <div class="row g-4">
      <?php foreach ($news as $post): ?>
        <div class="col-sm-6 col-lg-4">
          <?php snippet('news-card', ['post' => $post]) ?>
        </div>
      <?php endforeach ?>
    </div>
    <?php if (isset($post)): ?>
    <div class="text-center">
      <a class="btn btn-outline-primary rounded-pill d-inline-flex align-items-center px-3 py-2 fs-7 mt-4" href="<?= $post->parent()->url() ?>" role="button">
        <span class="me-1"><?= t('more-post') ?></span>
        <svg class="flex-shrink-0" style="width: 1.1rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
      </a>
    </div>
    <?php endif ?>
  </section>
  <?php endif ?>

  <?php if (count($pojok) > 0): ?>
  <section class="bg-primary pojok-section">
    <div class="container-lg px-4 py-5">
      <h2 class="fs-3 fw-bold text-white">Pojok Pereng Dawe</h2>
      <div class="row g-4 mt-0">
      <?php foreach ($pojok as $post): ?>
        <div class="col-sm-6 col-lg-4">
          <?php snippet('news-card', ['post' => $post]) ?>
        </div>
      <?php endforeach ?>
      </div>
      <div class="text-center">
        <a class="btn btn-outline-light rounded-pill d-inline-flex align-items-center px-3 py-2 fs-7 mt-4" href="<?= $post->parent()->url() ?>" role="button">
          <span class="me-1"><?= t('more-post') ?></span>
          <svg class="flex-shrink-0" style="width: 1.1rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
        </a>
      </div>
    </div>
  </section>
  <?php endif ?>

  <?php if (count($gallery) > 0): ?>
  <section class="container-lg px-4 py-5">
    <h2 class="fs-3 fw-bold"><?= $gallery->parent()->title() ?></h2>
    <hr class="border-primary border-3 mt-2 mb-1" style="opacity: 1; width: 48px">
    <div class="row g-4 mt-0">
      <?php foreach ($gallery as $album): ?>
        <div class="col-sm-6 col-lg-4">
          <?php snippet('gallery-card', ['album' => $album]) ?>
        </div>
      <?php endforeach ?>
    </div>
    <div class="text-center">
      <a class="btn btn-outline-primary rounded-pill d-inline-flex align-items-center px-3 py-2 fs-7 mt-4" href="<?= $album->parent()->url() ?>" role="button">
        <span class="me-1"><?= t('more-post') ?></span>
        <svg class="flex-shrink-0" style="width: 1.1rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
      </a>
    </div>
  </section>
  <?php endif ?>
<?php endsnippet() ?>