<?php

require 'require.php';

echo "Hello World";
$klaus = new User();
print_r($klaus);



$test = SQL::select("SELECT * FROM test WHERE 1");
print_r($test);