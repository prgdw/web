<?php

return function () {
    return page('pojok')
        ->children()
        ->listed()
        ->filter(translatedFilter())
        ->sortBy('date', 'desc');
};
