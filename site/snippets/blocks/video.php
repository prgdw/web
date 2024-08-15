<?php
/*
Overwrite default snippet 
Video block
See documentation: https://getkirby.com/docs/reference/panel/blocks/video
*/

/** @var \Kirby\Cms\Block $block */

$caption = $block->caption();
$url = $block->url();
?>

<?php if ($video = Html::video($url, [], ['class' => 'embed-responsive-item rounded'])): ?>
<div class="ratio ratio-16x9 embed-iframe">
  <?= $video ?>
</div>
<?php endif ?>