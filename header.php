 <?php
error_reporting(E_ERROR); ini_set("display_errors", 1);

function isActive ($page) {
    $route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = explode('/', substr($route['path'], 1));

    if ($path[0]==$page) {
        echo 'class="active"';
    }

    if (empty($path[0]) && $page=='home') {
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
                    <li <?php isActive('empresa') ?>><a href="/empresa">Empresa</a></li>
                    <li <?php isActive('produtos') ?>><a href="/produtos">Produtos</a></li>
                    <li <?php isActive('servicos') ?>><a href="/servicos">Serviços</a></li>
                    <li <?php isActive('contato') ?>><a href="/contato">Contato</a></li>

                </ul>
                <?php if (isset($_SESSION['login'])) {
     echo '<div>';
     echo '<p>Você está logado</p>';
     echo '<a href="logoff.php" id="logoff">Faça o logoff</a>';
     echo '</div>';
 } else {
                echo '<div>';
                        echo '<form action="login.php" class="form-group" name="login" method="post" id="login">';
                            echo '<fieldset><h2>Login</h2></fieldset>';
                            echo '<label for="user">Nome de usuário';
                                echo '<input type="text" name="user" class="login">';
                            echo '</label>';
                            echo '<label for="senha">Senha';
                                echo '<input type="password" name="senha">';
                            echo '</label>';
                            echo '<input type="submit" class="botao">';
                        echo '</form>';
                    echo '</div>';
     } ?>
                    <div>
                        <form action="busca.php" name="Busca" method="get" class="form-group" id="busca">
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
