<?php

use Kirby\Panel\Panel;

return [
  'page.changeTitle:after' => function (Kirby\Cms\Page $newPage) {
    $templates = ['post', 'album'];
    $template = $newPage->template()->name();

    if (in_array($template, $templates)) {
      $kirby = kirby();

      $uuid = explode('-', $newPage->slug());

      $slug = $uuid[0].'-'.$newPage->title();
      
      $oldUrl = $newPage->panel()->path();
      $referrer = Panel::referrer();
      
      $kirby->impersonate('kirby');
      $newPage = $newPage->changeSlug($slug);
      $kirby->impersonate(null);
      
      // Ensure that redirects only occur on resource pages
      if (str_contains($referrer, $oldUrl)) {
        Panel::go($newPage->panel()->path());
      }
    }
  },
];