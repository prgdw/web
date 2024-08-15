<?php

return function () {
    return page('galeri')
        ->children()
        ->listed()
        ->filter(translatedFilter())
        ->sortBy('date', 'desc');
};
