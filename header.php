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

    <div class="row">
        <div class="col-xs-3">
            <header>
                <ul class="nav nav-pills nav-stacked">
                    <li <?php isActive('home') ?>><a href="/">Home</a></li>
                    <li <?php isActive('empresa') ?>><a href="?page=empresa">Empresa</a></li>
                    <li <?php isActive('produtos') ?>><a href="?page=produtos">Produtos</a></li>
                    <li <?php isActive('servicos') ?>><a href="?page=servicos">Serviços</a></li>
                    <li <?php isActive('contato') ?>><a href="?page=contato">Contato</a></li>
                </ul>
            </header>
        </div>

        <div class="col-xs-9">
            <main>
