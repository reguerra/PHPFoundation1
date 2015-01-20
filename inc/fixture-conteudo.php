<?php

require_once "functions.php";

$conn = conexaoDB();
$del = "DROP TABLE IF EXISTS conteudo;";
$cria = "CREATE TABLE IF NOT EXISTS login (id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, titulo VARCHAR(91) NOT NULL, conteudo LONGTEXT NOT NULL);";
$insere = "INSERT INTO conteudo (titulo, conteudo) VALUES ('', '');";

//Deletar tabela
//deletar();

//Criar tabela
//criar();

//Inserir dados na tabela
//inserir();