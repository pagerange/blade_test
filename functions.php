<?php

use Philo\Blade\Blade;

function view($view, $data)
{
    $views = __DIR__ . '/views';
    $cache = __DIR__ . '/cache';

    $blade = new Blade($views, $cache);
    
    echo $blade->view()->make($view, $data)->render();

}