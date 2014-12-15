<?php
error_reporting(E_ERROR); ini_set("display_errors", 1);

function isActive ($page) {
    if ($_GET['page']==$page) {
        echo 'class="active"';
    }

    if (!isset($_GET['page']) && $page=='home') {
        echo 'class="active"';
    }
}
?>
<html>
<head>
    <title>Projeto PHP Foundation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
