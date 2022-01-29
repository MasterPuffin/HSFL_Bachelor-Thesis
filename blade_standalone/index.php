<?php

use eftec\bladeone\BladeOne;

require 'require.php';

$nav = [
	["Home", "home"],
	["News", "news"],
	["Mitarbeiter", "users"],
	["Kontakt", "contact"],
];

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.


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
		echo $blade->run("home", ['nav' => $nav, 'news' => \News::getAll(4)]);
		break;
	case 'news':
		if (isset($request[1])) {
			echo $blade->run("news", ['nav' => $nav, 'news' => new \News($request[1])]);
		} else {
			echo $blade->run("newsGrid", ['nav' => $nav, 'news' => \News::getAll()]);		}
		break;
	case 'users':
		if (isset($request[1])) {
			//echo $twig->render('user.twig', ['nav' => $nav, 'user' => new \User($request[1]), 'news' => $news = \News::getForUser($request[1])]);
		} else {
			//echo $twig->render('userGrid.twig', ['nav' => $nav, 'departments' => \User::orderByDepartments(\User::getAll())]);
		}
		break;
	case 'contact':
		//echo $twig->render('contact.twig', ['nav' => $nav, 'form' => $_POST]);
		break;
	default:
		echo $blade->run("404", ['nav' => $nav]);
		break;
}
