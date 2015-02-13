<!doctype html>
<?php define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/inc/functions.php');  ?>
<html>
<head>
	<title>Projeto PHP Foundation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="../summernote-master/dist/summernote.css" rel="stylesheet">
	<script src="../summernote-master/dist/summernote.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">

</head>
<body>
<div class="container">

	<div class="row">
		<div class="col-xs-3">
			<header>
				<ul class="nav nav-pills nav-stacked">
					<li <?php isActive('home') ?>><a href="/">Home</a></li>
					<li <?php isActive('empresa') ?>><a href="/listagem-clientes">Listagem de clientes</a></li>
				</ul>
			</header>
		</div>

		<div class="col-xs-9">
			<main>