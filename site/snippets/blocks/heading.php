<?php

/*
Overwrite default snippet 
Heading block
See documentation: https://getkirby.com/docs/reference/panel/blocks/heading
*/

/** @var \Kirby\Cms\Block $block */

$level = $block->level()->or('h2');
$cls = intval($level->toString()[1]) + 1;

?>

<<?= $level = $block->level()->or('h2') ?> class="fs-<?= $cls ?>"><?= $block->text() ?></<?= $level ?>>