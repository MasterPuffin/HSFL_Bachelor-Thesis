<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const WEBROOT = "/vanilla";
const RESOURCESROOT = "";

//Require composer
require 'vendor/autoload.php';
//require 'functions.php';

//Class autoloader


//Init mysql
$mysqli = SQL::init("localhost", "hsfl_ba");