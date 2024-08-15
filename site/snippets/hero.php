<?php if ($featured): ?>
<section class="bg-body-secondary">
  <div class="container-lg px-4 py-4 py-md-5">
    <div class="row gx-5 gy-4 align-items-center">
      <div class="col-md-6">
        <a class="d-inline-block" href="<?= esc($featured->url()) ?>">
          <img class="w-100 rounded"
            style="aspect-ratio: 3/2; object-fit: cover;"
            src="<?= esc($featured->cover()->url()) ?>"
            alt="Hero image"
          >
        </a>
      </div>
      <div class="col-md-6">
        <div class="d-inline-block bg-dark text-white px-3 py-2 rounded">
          <h2 class="fs-7 m-0">
            <?= t('featured-label') ?>
          </h2>
        </div>
        <h1 class="fs-2 fw-bold text-dark mt-3">
          <a class="hero__headline text-dark line-clamp-3" href="<?= esc($featured->url()) ?>">
            <?= $featured->title()->esc() ?>
          </a>
        </h1>
        <div class="d-flex gap-3 align-items-center text-slate mt-2">
          <div class="d-flex align-items-center">
            <svg class="me-1" style="width: 1.25rem; height: 1.25rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
            <span><?= $featured->authorName() ?></span>
          </div>
          <div class="d-flex align-items-center">
            <svg class="me-1" style="width: 1.25rem; height: 1.25rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M8 15h2v2h-2z" /></svg>
            <span><?= $featured->published() ?></span>
          </div>
        </div>
        <p class="mt-3 mb-0 line-clamp-4">
          <?= $featured->body()->toBlocks()->excerpt(320) ?>
        </p>
      </div>
    </div>
  </div>
</section>
<?php endif ?>