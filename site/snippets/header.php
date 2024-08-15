<header>
  <div class="bg-primary">
    <div class="container-lg px-4 py-2 d-flex justify-content-end">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle language-selector" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php if($kirby->language()->code() == 'id'): ?>
            <img class="w-auto me-1" style="height: .75rem;" src="<?= asset('/assets/img/id.png')->url() ?>" alt="Indonesian Flag">
            Indonesia
          <?php else: ?>
            <img class="w-auto me-1" style="height: .75rem;" src="<?= asset('/assets/img/en.png')->url() ?>" alt="Bendera Amerika dan Inggris">
            English
          <?php endif ?>
        </button>
        <ul class="dropdown-menu">
          <?php foreach($kirby->languages()->flip() as $language): ?>
          <li>
            <a class="dropdown-item <?= e($kirby->language() == $language, 'active') ?>"href="<?php e($page->translation($language->code())->exists(), $page->url($language->code()), $language->url()) ?>" hreflang="<?= $language->code() ?>">
              <?= html($language->name()) ?>
            </a></li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
  </div>
  <?php snippet('navbar') ?>
</header>