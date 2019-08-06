<?php

require __DIR__ . '/../vendor/autoload.php';

use Philo\Blade\Blade;

// where are the views stored?
$views = __DIR__ . '/../views';

// where are cached views stored?
$cache = __DIR__ . '/../cache';

// Create a new blade object
$blade = new Blade($views, $cache);

$name = 'Steve';
 
echo $blade->view()->make( 'index', compact('name') )->render();
