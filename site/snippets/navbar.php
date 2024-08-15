<nav class="navbar navbar-expand-md bg-white border-bottom">
  <div class="container-lg px-3">
    <a class="d-flex align-items-center navbar-brand fw-bolder" href="/" style="font-weight: 800;">
      <svg class="w-auto me-2" style="height: 16px" width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><path d="M12 22L0.587322 13.7082L4.94658 0.291796L19.0534 0.291796L23.4127 13.7082L12 22Z" fill="#2563EB"/></svg>
      PERENG DAWE
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ms-auto">
        <?php $navMenu = $site->navmenu()->toStructure(); ?>
        <?php if ($navMenu->isNotEmpty()): ?>
          <?php foreach ($navMenu as $menu): ?>
            <?php $menuItems = $menu->items()->toPages(); ?>
            <?php if (size($menuItems) > 1):  ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php e($menuItems->has($pages->findOpen()), 'active') ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?= empty($menu->label()->toString()) ? "Label" : esc($menu->label()) ?>
                </a>
                <ul class="dropdown-menu">
                  <?php foreach ($menuItems as $item): ?>
                  <li>
                    <a class="dropdown-item <?php e($item->isOpen(), 'active') ?>" href="<?= $item->url() ?>" <?php e($item->isOpen(), 'aria-current="page"') ?>>
                      <?= esc($item->title()) ?>
                    </a>
                  </li>
                  <?php endforeach ?>
                </ul>
              </li>
            <?php elseif (size($menuItems) == 1): ?>
              <?php $item = $menuItems->first() ?>
              <li class="nav-item">
                <a class="nav-link <?php e($item->isOpen(), 'active') ?>" href="<?= $item->url() ?>" <?php e($item->isOpen(), 'aria-current="page"') ?>>
                  <?= empty($menu->label()->toString()) ? esc($item->title()) : esc($menu->label()) ?>
                </a>
              </li>
            <?php endif ?>
          <?php endforeach ?>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>