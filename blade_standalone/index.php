<?php

use eftec\bladeone\BladeOne;

require 'vendor/autoload.php';


$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.
echo $blade->run("helloworld"); // it calls /views/hello.blade.php