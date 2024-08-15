<?php

return function ($page) {
    $gallery = collection('gallery');

    $tag = param('tag');
    if (empty($tag) === false) {
        $gallery = $gallery->filterBy('tags', $tag, ',');
    }

    return [
        'gallery' => $gallery->paginate(12),
        'tag'   => $tag,
    ];

};
