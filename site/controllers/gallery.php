<?php

return function ($page) {
    $gallery = collection('galeri');

    $tag = param('tag');
    if (empty($tag) === false) {
        $gallery = $gallery->filterBy('tags', $tag, ',');
    }

    return [
        'gallery' => $gallery->paginate(12),
        'tag'   => $tag,
    ];

};
