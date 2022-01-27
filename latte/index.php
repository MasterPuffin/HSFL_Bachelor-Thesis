<?php
require 'require.php';

$latte = new Latte\Engine;

$latte->setTempDirectory(__DIR__ . '/cache/');

$root = [
	"ressources" => "",
	"web" => "/latte",
];

$nav = [
	["Home", "home"],
	["News", "news"],
	["Mitarbeiter", "users"],
	["Kontakt", "contact"],
];

// render to output
$latte->render('templates/base.latte', ['root' => $root, 'nav' => $nav]);

$params = [
	'items' => ['one', 'two', 'three'],
];

// render to output
//$latte->render('templates/template.latte', $params);