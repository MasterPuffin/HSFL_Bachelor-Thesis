<?php
require 'require.php';

$root = [
	"ressources" => "",
	"web" => "/latte",
];


$latte = new Latte\Engine;

$latte->setTempDirectory(__DIR__ . '/cache/');

$latte->addFunction('truncate', function (string $string, int $length = 100): string {
	return substr($string, 0, $length) . "...";
});
$latte->addFilter('image', function (?string $image) {
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
		$latte->render('templates/home.latte', ['root' => $root, 'nav' => $nav, 'news' => \News::getAll(4)]);
		break;
	case 'news':
		if (isset($request[1])) {
			$latte->render('templates/news.latte', ['root' => $root, 'nav' => $nav, 'news' => new \News($request[1])]);
		} else {
			$latte->render('templates/newsGrid.latte', ['root' => $root, 'nav' => $nav, 'news' => \News::getAll()]);
		}
		break;
	case 'users':
		if (isset($request[1])) {
			$latte->render('templates/user.latte', ['root' => $root, 'nav' => $nav, 'user' => new \User($request[1]), 'news' => \News::getForUser($request[1])]);
		} else {
			$latte->render('templates/userGrid.latte', ['root' => $root, 'nav' => $nav, 'departments' => \User::orderByDepartments(\User::getAll())]);
		}
		break;
	case 'contact':
		$latte->render('templates/contact.latte', ['root' => $root, 'nav' => $nav, 'form' => $_POST]);
		break;
	default:
		$latte->render('templates/404.latte', ['root' => $root, 'nav' => $nav]);
		break;
}
