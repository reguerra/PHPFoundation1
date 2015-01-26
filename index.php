<?php


/*
$route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = explode('/', substr($route['path'], 1));

echo "<pre>";
print_r($path);
echo "</pre>";
die;
*/

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

require_once "/inc/functions.php";

getRoute();