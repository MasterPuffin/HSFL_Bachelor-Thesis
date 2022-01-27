<?php

use Twig\TwigFilter;
use Twig\TwigFunction;

require 'require.php';


$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
	'cache' => false,
]);
$twig->addExtension(new TwigExtension());

$nav = [
	["Home", "home"],
	["News", "news"],
	["Mitarbeiter", "users"],
	["Kontakt", "contact"],
];

echo $twig->render('home.twig', ['nav' => $nav, 'news'=>\News::getAll(4)]);
/*

//Explode Request to array and remove empty entries
$request = array_diff(explode("/", $_SERVER['REQUEST_URI']), [""]);
//Reindex array keys
sort($request, SORT_NUMERIC);

//Remove project name from request
if (in_array($request[0], ["vanilla", "blade_laravel", "blade_standalone", "latte", "mustache", "pesto", "smarty", "twig"])) {
	unset($request[0]);
	sort($request, SORT_NUMERIC);
}


//devPrint($request);

//Redirect to home page when accessing /
if (!isset($request[0])) {
	redirect("home/");
}

switch ($request[0]) {
	case 'home':
		\Views\Home::page();
		break;
	case 'news':
		!isset($request[1]) ? \Views\NewsGrid::page() : \Views\News::page($request[1]);
		break;
	case 'users':
		!isset($request[1]) ? \Views\UserGrid::page() : \Views\User::page($request[1]);
		break;
	case 'contact':
		\Views\Contact::page();
		break;
	default:
		\Views\Error::page();
		break;
}
*/