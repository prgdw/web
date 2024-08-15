<?php

use Kirby\Cms\App as Kirby;

require 'kirby/bootstrap.php';

date_default_timezone_set('Asia/Jakarta');

echo (new Kirby)->render();
