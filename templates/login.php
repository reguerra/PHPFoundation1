<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "../inc/functions.php";

getUserLogin();
header('location: ../templates/admin.php');