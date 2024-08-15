<div
  class="ratio embed-iframe bg-body-secondary rounded"
  <?php if ($block->sizing() == 'Height'): ?>
  style="height: <?= $block->height() ?>px"
  <?php else: ?>
  style="aspect-ratio: <?= $block->ratio() ?>"
  <?php endif ?>
>
  <div class="iframe-loading">
    <div class="spinner-border text-primary" role="loading" style="width: 3rem; height: 3rem;">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  <iframe class="embed-responsive-item rounded" title="<?= $block->title() ?>" src="<?= $block->source() ?>" loading="lazy" referrerpolicy="no-referrer" style="opacity: 0"></iframe>
</div>