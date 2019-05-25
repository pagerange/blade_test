<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../functions.php';

$name = 'Steve';

return view('index', compact('name'));
