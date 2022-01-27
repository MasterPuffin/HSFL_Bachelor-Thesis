<?php
require 'require.php';


$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
	'cache' => __DIR__ . '/cache',
]);

$nav = [
	["Home", "home"],
	["News", "news"],
	["Mitarbeiter", "users"],
	["Kontakt", "contact"],
];

echo $twig->render('base.twig', ['nav' => $nav]);