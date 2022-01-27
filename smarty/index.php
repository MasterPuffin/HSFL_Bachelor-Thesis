<?php

require 'require.php';

$nav = [
	["Home", "home"],
	["News", "news"],
	["Mitarbeiter", "users"],
	["Kontakt", "contact"],
];


$smarty = new Smarty();
$smarty->assign('nav', $nav);

$smarty->registerPlugin("modifier", "image", "resolveImage", false);

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
		$smarty->assign('news', \News::getAll(4));
		$smarty->display('home.tpl');
		//echo $twig->render('home.twig', ['nav' => $nav, 'news' => \News::getAll(4)]);
		break;
	case 'news':
		if (isset($request[1])) {
			$smarty->assign('news', new News($request[1]));
			$smarty->display('news.tpl');
		} else {
			$smarty->assign('news', \News::getAll());
			$smarty->display('newsGrid.tpl');
		}
		break;
	case 'users':
		if (isset($request[1])) {
			$smarty->assign(['user' => new User($request[1]), 'news' => \News::getForUser($request[1])]);
			$smarty->display('user.tpl');
		} else {
			$smarty->assign('departments', \User::orderByDepartments(\User::getAll()));
			$smarty->display('userGrid.tpl');
		}
		break;
	case 'contact':
		$smarty->assign('form', $_POST);
		$smarty->display('contact.tpl');
		break;
	default:
		$smarty->display('404.tpl');
		break;
}
