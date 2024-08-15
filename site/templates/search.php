<?php snippet('layout', slots: true) ?>
  <section class="container-lg px-4 py-4 pb-5 py-lg-5">
    <div class="row">
      <article class="col-md-8 mx-auto">
        <h1 class="fs-2 fw-bold m-0"><?= $page->title()->esc() ?></h1>
        <hr class="border-primary border-3 mt-2 mb-1" style="opacity: 1; width: 48px">
        <form class="hstack gap-2 mt-4">
          <input class="form-control"  type="search" aria-label="Search" name="q" minlength="3" value="<?= html($query) ?>">
          <button type="submit" class="btn btn-primary"><?= t('search-btn') ?></button>
        </form>
        <?php if ($query): ?>
          <div class="mt-4">
            <span class="fw-medium fs-5 text-wrap"><?= count($results) ?> <?= t('search-result') ?> <code class="fs-5"><?= esc($query) ?></code></span>
          </div>
          <ul class="list-unstyled vstack gap-2 mt-2">
            <?php foreach ($results as $result): ?>
            <li>
              <a class="card card-link" href="<?= esc($result->url()) ?>">
                <div class="card-body">
                  <span class="badge rounded-pill text-bg-primary"><?= $result->parent()->title() ?></span>
                  <h3 class="fs-6 m-0 fw-semibold mt-2"><?= $result->title()->esc() ?></h3>
                </div>
              </a>
            </li>
            <?php endforeach ?>
          </ul>
          <?php snippet('pagination', ['collection' => $results]) ?>
        <?php endif ?>
      </article>
  </section>
<?php endsnippet() ?>
