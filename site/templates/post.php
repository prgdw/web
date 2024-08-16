<?php snippet('layout', slots: true) ?>
  <section class="container-lg px-4 py-4 pb-5">
    <div class="row">
      <article class="col-md-8 mx-auto">
        <?php snippet('breadcrumb') ?>
        <h1 class="fs-2 fw-bold m-0 mt-3"><?= $page->title()->esc() ?></h1>
        <div class="hstack gap-3 text-slate mt-3 flex-wrap">
          <div class="d-flex align-items-center">
            <svg class="flex-shrink-0 me-1" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
            <?php if ($page->author()): ?>
              <span><?= esc($page->authorName()) ?></span>
            <?php endif ?>
          </div>
          <div class="d-flex align-items-center">
            <svg class="flex-shrink-0 me-1" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M8 15h2v2h-2z" /></svg>
            <span><?= $page->published() ?></span>
          </div>
        </div>
        <?php if ($image = $page->cover()): ?>
          <img
            class="post__img rounded mt-4"
            src="<?= esc($image->url()) ?>"
            style="aspect-ratio: 3/2; object-fit: cover;"
          >
        <?php endif ?>
        <div class="prose">
          <?= $page->body()->toBlocks() ?>
        </div>
        <div class="mt-4">
          <?php snippet('post-tags', ['tags' => $tags]) ?>
        </div>
        <hr class="mt-4 mb-0">
      </article>
      <?php if (count($otherPost) > 0): ?>
      <div class="col-md-8 mx-auto mt-4">
        <span class="d-block fs-4 fw-bold"><?= e($page->parent()->title() == "Berita", 'Berita', 'Informasi') ?> Lainnya</span class="fs-4 fw-bold">
        <hr class="border-primary border-3 mt-2 mb-4" style="opacity: 1; width: 48px">
        <div class="row g-4">
          <?php foreach($otherPost as $other): ?>
            <div class="col-sm-6">
              <?php snippet('news-card', ['post' => $other]) ?>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <?php endif ?>
    </div>
  </section>
  <?= js('assets/js/iframe-loader.js') ?>
<?php endsnippet() ?>
