<?php

return function ($page) {

    $news = collection('berita');
    $pojok = collection('pojok');
    $gallery = collection('galeri');

    return [
        'featured' => $news->first(),
        'news' => $news->offset(1)->limit(9),
        'pojok' => $pojok->limit(3),
        'gallery' => $gallery->limit(6),
    ];

};
