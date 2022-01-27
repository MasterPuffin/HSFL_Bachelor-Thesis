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

//Explode Request to array and remove empty entries
$request = array_diff(explode("/", $_SERVER['REQUEST_URI']), [""]);
//Reindex array keys
sort($request, SORT_NUMERIC);

//Remove project name from request
if (in_array($request[0], ["vanilla", "blade_laravel", "blade_standalone", "latte", "mustache", "pesto", "smarty", "twig"])) {
	unset($request[0]);
	sort($request, SORT_NUMERIC);
}

//Redirect to home page when accessing /
if (!isset($request[0])) {
	redirect("home/");
}

switch ($request[0]) {
	case 'home':
		echo $twig->render('home.twig', ['nav' => $nav, 'news' => \News::getAll(4)]);
		break;
	case 'news':
		echo !isset($request[1]) ? $twig->render('newsGrid.twig', ['nav' => $nav, 'news' => \News::getAll()]) : $twig->render('news.twig', ['nav' => $nav, 'news' => new \News($request[1])]);
		break;
	case 'users':
		if (isset($request[1])) {
			echo $twig->render('user.twig', ['nav' => $nav, 'user' => new \User($request[1]), 'news' => $news = \News::getForUser($request[1])]);
		} else {
			$users = \User::getAll();
			echo $twig->render('userGrid.twig', ['nav' => $nav, 'users' => $users, 'departments' => \User::orderByDepartments($users)]);
		}
		break;
	case 'contact':
		echo $twig->render('contact.twig', ['nav' => $nav, 'form' => $_POST]);
		break;
	default:
		echo $twig->render('404.twig', ['nav' => $nav]);
		break;
}
