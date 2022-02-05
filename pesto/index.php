<?php
require 'require.php';


$p = new Pesto(__DIR__ . "/");
$p->enableCaching = false;

$request = getRequestArr();

//Redirect to home page when accessing /
if (!isset($request[0])) {
	redirect("home/");
}

switch ($request[0]) {
	case 'home':
		echo $p->render('Home');
		break;
	case 'news':
		if (isset($request[1])) {
			echo $p->render('News');
		} else {
			echo $p->render('NewsGrid');
		}
		break;
	case 'users':
		if (isset($request[1])) {
			echo $p->render('User');
		} else {
			echo $p->render('UserGrid');
		}
		break;
	case 'contact':
		echo $p->render('Contact');
		break;
	default:
		echo $p->render('404');
		break;
}

