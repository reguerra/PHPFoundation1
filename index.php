<?php
/**
 * todo - Criar a home restrita com listagem das páginas;
 * todo - Conectar as páginas a um editor online;
 * todo - Configurar o update automático ao banco de dados;
 * todo - Configurar o redirecionamento;
 * todo - Criar fixture para adicionar usuário e senha;
*/
/*
$route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = explode('/', substr($route['path'], 1));

echo "<pre>";
print_r($path);
echo "</pre>";
die;
*/

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "/inc/functions.php";

getRoute();