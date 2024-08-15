<?php
  // Exclude the last item which is the current page
  $breadcrumb = $site->breadcrumb();
  $breadcrumb->remove($breadcrumb->last());
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <?php foreach($breadcrumb as $crumb): ?>
      <li class="breadcrumb-item">
        <a href="<?= $crumb->url() ?>"><?= esc($crumb->title()) ?></a>
      </li>
    <?php endforeach ?>
  </ol>
</nav>