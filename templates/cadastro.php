<?php

require_once "header.php";
require_once "../inc/functions.php";


if (strlen($_POST['senha']) < 6) { ?>
    <h3>Usuário não foi criado</h3>
    <p>Sua senha é curta demais. Clique abaixo para voltar para a tela de cadastro e escolher uma nova senha.</p><br>
    <a href="/newuser">Voltar para a tela de cadastro</a> <?php
} elseif (strlen($_POST['senha']) > 9){ ?>
    <h3>Usuário não foi criado</h3>
    <p>Sua senha é longa demais. Clique abaixo para voltar para a tela de cadastro e escolher uma nova senha.</p><br>
    <a href="/newuser">Voltar para a tela de cadastro</a> <?php
} else {
    if ($_POST['senha'] <> $_POST['confsenha']) { ?>
        <h3>Usuário não foi criado</h3>
        <p>Sua senha e confirmação de senha não batem. Clique abaixo para voltar para a tela de cadastro e corrigir.</p><br>
        <a href="/newuser">Voltar para a tela de cadastro</a> <?php
    } elseif (empty ($_POST['username'])) { ?>
        <h3>Usuário não foi criado</h3>
        <p>Você não escolheu um nome de usuário. Clique abaixo para voltar para a tela de cadastro e corrigir.</p><br>
        <a href="/newuser">Voltar para a tela de cadastro</a> <?php
    } else {
        try {
            insUser(); ?>
            <h3>Usuário criado</h3>
            <p>Clique abaixo para fazer o login</p>
            <a href="/tela-login">Faça o login</a> <?php
        }
        catch (Exception $e) { ?>
            <h3>Usuário não foi criado</h3>
            <p>O nome de usuário já existe. Favor escolher um novo nome de usuário.</p><br>
            <a href="/newuser">Voltar para a tela de cadastro</a> <?php
        }
    }
}

require_once "footer.php";