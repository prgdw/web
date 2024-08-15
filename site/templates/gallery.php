<?php snippet('layout', slots: true) ?>
  <section class="container-lg px-4 py-4 pb-5 py-lg-5">
    <h1 class="fs-2 fw-bold m-0"><?= $page->title()->esc() ?></h1>
    <hr class="border-primary border-3 mt-2 mb-1" style="opacity: 1; width: 48px">
    <?php if (empty($tag) == false): ?>
    <div class="d-flex flex-wrap gap-2 mt-4">
      <span class="d-inline-flex bg-secondary align-items-center text-white px-2 py-1 rounded fs-6" aria-label="Tag <?= esc($tag) ?>">
        <svg class="me-2 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z" /></svg>
        <?= esc($tag) ?>
      </span>
      <a class="btn btn-outline-secondary d-flex align-items-center px-2 py-1" href="<?= $page->url() ?>" aria-label="Hapus pemfilteran tag">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"  stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
      </a>
    </div>
    <?php endif ?>
    <div class="row g-4 mt-0">
      <?php foreach ($gallery as $album): ?>
        <div class="col-sm-6 col-lg-4">
          <?php snippet('gallery-card', ['album' => $album]) ?>
        </div>
      <?php endforeach ?>
    </div>
    <?php snippet('pagination', ['collection' => $gallery]) ?>
  </section>
<?php endsnippet() ?>