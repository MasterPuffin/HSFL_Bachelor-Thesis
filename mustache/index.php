<?php
require 'vendor/autoload.php';
$m = new Mustache_Engine;
echo $m->render('Hello World'); // "Hello, World!"
