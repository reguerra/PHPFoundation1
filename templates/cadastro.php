<?php

require_once "header.php";
require_once "../inc/functions.php";

if (strlen($_POST['senha']) < 6) {
    echo '<h3>Usuário não foi criado</h3>';
    echo '<p>Sua senha é curta demais. Clique abaixo para voltar para a tela de cadastro e escolher uma nova senha.</p>'.'<br>';
    echo '<a href="/newuser">Voltar para a tela de cadastro</a>';
} elseif (strlen($_POST['senha']) > 9){
    echo '<h3>Usuário não foi criado</h3>';
    echo '<p>Sua senha é longa demais. Clique abaixo para voltar para a tela de cadastro e escolher uma nova senha.</p>'.'<br>';
    echo '<a href="/newuser">Voltar para a tela de cadastro</a>';
} else {
    if ($_POST['senha'] <> $_POST['confsenha']) {
        echo '<h3>Usuário não foi criado</h3>';
        echo '<p>Sua senha e confirmação de senha não batem. Clique abaixo para voltar para a tela de cadastro e corrigir.</p>'.'<br>';
        echo '<a href="/newuser">Voltar para a tela de cadastro</a>';
    } elseif (empty ($_POST['username'])) {
        echo '<h3>Usuário não foi criado</h3>';
        echo '<p>Você não escolheu um nome de usuário. Clique abaixo para voltar para a tela de cadastro e corrigir.</p>'.'<br>';
        echo '<a href="/newuser">Voltar para a tela de cadastro</a>';
    } else {
        try {
            insUser();
            echo '<h3>Usuário criado</h3>';
            echo '<p>Clique abaixo para fazer o login</p>';
            echo '<a href="/tela-login">Faça o login</a>';
        }
        catch (Exception $e) {
            echo '<h3>Usuário não foi criado</h3>';
            echo '<p>O nome de usuário já existe. Clique abaixo para voltar para a tela de cadastro e escolher um novo nome.</p>'.'<br>';
            echo '<a href="/newuser">Voltar para a tela de cadastro</a>';
        }
    }
}

require_once "footer.php";