<?php

return function ($page) {
    $news = collection('news');

    $tag = param('tag');
    if (empty($tag) === false) {
        $news = $news->filterBy('tags', $tag, ',');
    }

    return [
        'news' => $news->paginate(12),
        'tag'   => $tag,
    ];

};
