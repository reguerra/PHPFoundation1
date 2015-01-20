<?php

require_once "functions.php";

$conn = conexaoDB();
$del = "DROP TABLE IF EXISTS login;";
$cria = "CREATE TABLE IF NOT EXISTS login (id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, user VARCHAR(91) NOT NULL, senha VARCHAR(255) NOT NULL);";
$insere = "INSERT INTO login (user, senha) VALUES ('teste', '".password_hash('123', PASSWORD_DEFAULT) ."');";

//Deletar tabela
//deletar();

//Criar tabela
//criar();

//Inserir dados na tabela
//inserir();