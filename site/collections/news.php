<?php

return function () {
    return page('berita')
        ->children()
        ->listed()
        ->filter(translatedFilter())
        ->sortBy('date', 'desc');
};
