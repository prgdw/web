<?php if (!empty($tags)): ?>
<div class="d-flex gap-2">
  <svg class="d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0" height="0">
    <symbol id="tags" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M3 6v5.172a2 2 0 0 0 .586 1.414l7.71 7.71a2.41 2.41 0 0 0 3.408 0l5.592 -5.592a2.41 2.41 0 0 0 0 -3.408l-7.71 -7.71a2 2 0 0 0 -1.414 -.586h-5.172a3 3 0 0 0 -3 3z"/></symbol>
  </svg>
  <?php foreach($tags as $tag) ?>
  <a class="post-tag d-flex align-items-center text-white px-2 py-1 rounded fs-7" href="<?= $page->parent()->url(['params' => ['tag' => $tag]]) ?>">
    <svg class="me-1 flex-shrink-0" width="16" height="16">
      <use xlink:href="#tags" />
    </svg>
    <?= esc($tag) ?>
  </a>
</div>
<?php endif ?>