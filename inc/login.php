<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "functions.php";

getUserLogin();
header('location: /');