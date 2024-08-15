<?php

/*
Overwrite default snippet 
Image block
See documentation: https://getkirby.com/docs/reference/panel/blocks/image
*/

/** @var \Kirby\Cms\Block $block */

$image = $block->image()->toFile();
$alt = $block->alt();
$ratio = $block->ratio()->or('auto');
$crop = $block->crop()->isTrue();

?>
<?php if ($image): ?>
<figure>
  <img
    class="post__img rounded"
    loading="lazy" data-thumbhash="<?= $image->thumbhash() ?>"
    src="<?= esc($image->url()) ?>"
    data-sizes="auto"
    alt="<?= esc($alt, 'attr') ?>"
    style="aspect-ratio: <?= $ratio ?? 'auto' ?>; object-fit: cover;"
  >
</figure>
<?php endif ?>


