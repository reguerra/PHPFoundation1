<?php

require_once "conexao_bd.php";

$query = "SELECT * FROM login WHERE usuario=:user";
$conexao = conexaoDB()->prepare($query);
$user = filter_input(INPUT_POST, 'user');
$conexao->bindValue(':user',$user);
$conexao->execute();
$resultado = $conexao->fetch(\PDO::FETCH_ASSOC);

if ($user = $resultado['usuario'] and $senha = $resultado['senha']){
    $lifetime = 60*60*24;
    session_start();
    setcookie(session_name(),session_id(),time()+$lifetime);
    $_SESSION['login'] = 1;
    echo 'logado';
    //header('location: /');
        }