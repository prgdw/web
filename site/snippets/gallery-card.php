<a class="card card-link" href="<?= $album->url() ?>">
  <?php if ($cover = $album->cover()): ?>
  <img class="card-img-top" src="<?= esc($cover->thumb('cover')->url()) ?>">
  <?php endif ?>
  <div class="card-body">
    <div class="d-flex align-items-center fs-7 text-slate">
      <svg class="me-1" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M8 15h2v2h-2z" /></svg>
      <span><?= $album->published() ?></span>
    </div>
    <h3 class="fs-5 fw-semibold card-text mt-2 line-clamp-3"><?= $album->title()->esc() ?></h3>
  </div>
</a>