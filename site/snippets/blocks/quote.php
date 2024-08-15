<?php

/*
Overwrite default snippet 
Quote block
See documentation: https://getkirby.com/docs/reference/panel/blocks/quote
*/

/** @var \Kirby\Cms\Block $block */

?>
<blockquote class="bg-light px-4 py-3 border-start border-5 rounded">
  <?= $block->text() ?>
  <?php if ($block->citation()->isNotEmpty()): ?>
  <footer class="fw-semibold mt-2">
    <?= $block->citation() ?>
  </footer>
  <?php endif ?>
</blockquote>