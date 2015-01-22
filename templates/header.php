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
					<li <?php isActive('empresa') ?>><a href="/empresa">Empresa</a></li>
					<li <?php isActive('produtos') ?>><a href="/produtos">Produtos</a></li>
					<li <?php isActive('servicos') ?>><a href="/servicos">Serviços</a></li>
					<li <?php isActive('contato') ?>><a href="/contato">Contato</a></li>
				</ul>

				<?php
				if (isUserLogged()) :
					$user = getLoggedUser();
					?>
					<div id="login-valid">
						<p>Olá <?php echo $user->name ?>! Você está logado</p>
						<a href="../templates/logoff.php" id="logoff">Faça o logoff</a>
					</div>
				<?php else : ?>
					<div id="login-form">
						<form action="../templates/login.php" class="form-group" name="login" method="post" id="login">
							<fieldset><h2>Login</h2></fieldset>
							<label for="user">Nome de usuário
								<input type="text" name="user" class="login">
							</label>
							<label for="senha">Senha
								<input type="password" name="senha">
							</label>
							<input type="submit" class="botao">
						</form>
					</div>
				<?php endif; ?>

				<div id="search-form">
					<form action="" name="Busca" method="get" class="form-group" id="busca">
						<fieldset><h2>Busca</h2></fieldset>
						<label for="busca">
							<input type="text" name="busca" id="busca" value="">
						</label>
						<input class="botao" type="submit">
					</form>
				</div>

			</header>
		</div>

		<div class="col-xs-9">
			<main>