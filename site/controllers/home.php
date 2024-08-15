<?php

return function ($page) {

    $news = collection('news');
    $pojok = collection('pojok');
    $gallery = collection('gallery');

    return [
        'featured' => $news->first(),
        'news' => $news->offset(1)->limit(9),
        'pojok' => $pojok->limit(3),
        'gallery' => $gallery->limit(6),
    ];

};
