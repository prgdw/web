<?php

return function ($page) {
    $otherPost = $page
        ->siblings(false)
        ->filter(translatedFilter())
        ->listed()
        ->shuffle()
        ->limit(4);

    return [
        'tags' => $page->tags()->split(','),
        'otherPost' => $otherPost,
    ];
};
