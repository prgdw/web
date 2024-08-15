<?php

return function ($page) {

    $images = $page->images()->sortBy('sort', 'filename');

    return [
        'images' => $images->paginate(10),
        'tags' => $page->tags()->split(','),
    ];

};
