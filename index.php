<?php

define("PHP_ROOT", dirname(__FILE__));
require_once PHP_ROOT.'/inc/functions.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

getRoute();