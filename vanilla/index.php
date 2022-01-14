<?php

require 'vendor/autoload.php';

echo "Hello World";

$mysqli = SQL::init("localhost", "hsfl_ba");

$test = SQL::select("SELECT * FROM test WHERE 1");
print_r($test);