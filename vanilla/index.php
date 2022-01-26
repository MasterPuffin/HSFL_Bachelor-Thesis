<?php



require 'require.php';
/*
echo "Hello World";
$klaus = new User();
print_r($klaus);
$test = SQL::select("SELECT * FROM test WHERE 1");
print_r($test);
*/

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
		echo 'users';
		break;
	case 'contact':
		echo 'contact';
		break;
	default:
		echo '404';
		break;
}
?>
