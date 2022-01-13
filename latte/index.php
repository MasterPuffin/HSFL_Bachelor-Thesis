<?php
require 'vendor/autoload.php';

$latte = new Latte\Engine;

//$latte->setTempDirectory('/');



// render to output
$latte->render('templates/helloworld.latte');