<?php


require 'require.php';

$m = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates'),
]);

$m->addHelper('fimage', function ($value) {
	return resolveImage($value);
});
$m->addHelper('truncate', function ($value) {
	return truncate($value, 100);
});
$m->addHelper('date', function ($value) {
	return date("d.m.Y", $value);
});

$root = ['web' => "/mustache", "ressources" => ""];

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
		$mainTemplate = $m->loadTemplate('home');
		$main = $mainTemplate->render(['root' => $root, 'news' => \News::getAll(4)]);
		break;
	case 'news':
		if (isset($request[1])) {
			$mainTemplate = $m->loadTemplate('news');
			$main = $mainTemplate->render(['root' => $root, 'news' => new \News($request[1])]);
		} else {
			$mainTemplate = $m->loadTemplate('newsGrid');
			$main = $mainTemplate->render(['root' => $root, 'news' => \News::getAll()]);
		}
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
		$mainTemplate = $m->loadTemplate('404');
		$main = $mainTemplate->render();
		break;
}


$baseTemplate = $m->loadTemplate('base');
echo $baseTemplate->render(['root' => $root, 'nav' => $nav, 'main' => $main]);
