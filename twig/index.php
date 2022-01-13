<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\ArrayLoader([
	'index' => 'Hello World']);
$twig = new \Twig\Environment($loader);

echo $twig->render('index');