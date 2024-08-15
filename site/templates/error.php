<?php snippet('layout', slots: true) ?>
  <section class="container-lg px-4 py-4 pb-5 py-lg-5">
    <div class="row">
      <article class="col-md-8 mx-auto">
        <h1 class="fs-2 fw-bold m-0"><?= $page->content()->text() ?></h1>
        <hr class="border-danger border-3 mt-2 mb-1" style="opacity: 1; width: 48px">
        <p class="fs-5 mt-4"><?= $page->content()->message() ?></p>
      </article>
    </div>
  </section>
<?php endsnippet() ?>
