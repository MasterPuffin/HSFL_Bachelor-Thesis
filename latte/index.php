<?php
require 'require.php';

$root = [
	"ressources" => "",
	"web" => "/latte",
];


$latte = new Latte\Engine;

$latte->setTempDirectory(__DIR__ . '/cache/');

$latte->addFilter('truncate', function (string $string, int $length = 100): string {
	return substr($string, 0, $length) . "...";
});
$latte->addFunction('resolveImage', function (?string $image) {
	global $root;
	if (empty($image)) $image = "placeholder.jpg";
	return $root["ressources"] . "/.assets/images/" . $image;
});


$nav = [
	["Home", "home"],
	["News", "news"],
	["Mitarbeiter", "users"],
	["Kontakt", "contact"],
];



// render to output
$latte->render('templates/home.latte', ['root' => $root, 'nav' => $nav, 'news' => \News::getAll(4)]);

$params = [
	'items' => ['one', 'two', 'three'],
];

// render to output
//$latte->render('templates/template.latte', $params);