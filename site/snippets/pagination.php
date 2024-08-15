<?php
  $pagination = $collection->pagination();
  $range = 5;
?>

<?php if ($pagination->hasPages()): ?>
<nav class="mt-5" aria-label="Page navigation example">
  <ul class="pagination m-0">
    <?php if ($pagination->page() > $range): ?>
    <li class="page-item">
      <a class="page-link h-100 <?= e($pagination->hasPrevPage(), '', 'disabled') ?>" href="<?= $pagination->firstPageUrl() ?>" aria-label="Previous">
        <span aria-hidden="true" class="d-flex align-items-center h-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11 7l-5 5l5 5" /><path d="M17 7l-5 5l5 5" /></svg>
        </span>
      </a>
    </li>
    <?php endif ?>

    <?php if ($pagination->hasPrevPage()): ?>
    <li class="page-item">
      <a class="page-link h-100" href="<?= $pagination->prevPageUrl() ?>" aria-label="Previous">
        <span aria-hidden="true" class="d-flex align-items-center h-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
        </span>
      </a>
    </li>
    <?php endif ?>

    <?php foreach($pagination->range($range) as $paging): ?>
    <li class="page-item"><a class="page-link <?= e($pagination->page() == $paging, 'active', '') ?>" href="<?= $pagination->pageUrl($paging) ?>"><?= $paging; ?></a></li>
    <?php endforeach ?>

    <?php if ($pagination->hasNextPage()): ?>
    
    <li class="page-item">
      <a class="page-link h-100" href="<?= $pagination->nextPageURL() ?>" aria-label="Next">
        <span aria-hidden="true" class="d-flex align-items-center h-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
        </span>
      </a>
    </li>
    <?php endif ?>
      
    <?php if ($pagination->page() <= $pagination->total() - $range): ?>
    <li class="page-item">
      <a class="page-link h-100 <?= e($pagination->hasNextPage(), '', 'disabled') ?>" href="<?= $pagination->lastPageUrl() ?>" aria-label="Previous">
        <span aria-hidden="true" class="d-flex align-items-center h-100">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7l5 5l-5 5" /><path d="M13 7l5 5l-5 5" /></svg>
        </span>
      </a>
    </li>
    <?php endif ?>
  </ul>
</nav>
<?php endif ?>