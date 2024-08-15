<?php

return function ($site) {

  $query   = get('q');
  $results = $site->search($query, 'title|text')->filter(translatedFilter());

  return [
    'query'   => $query,
    'results' => $results->paginate(20),
  ];

};