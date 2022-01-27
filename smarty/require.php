<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL ^ E_DEPRECATED);

const WEBROOT = "/smarty";
const RESOURCESROOT = "";

//Require composer
require 'vendor/autoload.php';
require 'functions.php';

//Class autoloader
spl_autoload_register(function ($className) {
	//Replace slashes for unix os
	$className = str_replace('\\', '/', $className);
	$class = explode('/', $className);
	//Capitalize each class name
	array_walk($class, function (&$value) {
		$value = ucfirst($value);
	});
	$className = implode('/', $class);

	include_once __DIR__ . '/classes/' . $className . '.php';
});

//Init mysql
$mysqli = SQL::init("localhost", "hsfl_ba");