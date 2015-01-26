<?php

require_once "functions.php";

//Fixture de usuários
$conn = conexaoDB();
$del = "DROP TABLE IF EXISTS login;";
$cria = "CREATE TABLE IF NOT EXISTS login (id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, user VARCHAR(23) NOT NULL, senha VARCHAR(255) NOT NULL);";
$insere = "INSERT INTO login (user, senha) VALUES ('teste', '".password_hash('123', PASSWORD_DEFAULT) ."');";

//Deletar tabela
delUser();

//Criar tabela
criaUser();

//Inserir dados na tabela
insUser();


//Fixture de conteúdo
$conn = conexaoDB();
$delTable = "DROP TABLE IF EXISTS conteudo;";
$delContent = "DELETE FROM conteudo WHERE titulo='';";
$criaTable = "CREATE TABLE IF NOT EXISTS login (id INT AUTO_INCREMENT PRIMARY KEY NOT NULL, titulo VARCHAR(23) NOT NULL, conteudo LONGTEXT NOT NULL);";
$insere = "INSERT INTO conteudo (titulo, conteudo) VALUES ('', '');";

//Deletar tabela
//delTableCont();

//Deletar conteúdo
//delContent();

//Criar tabela
//criaTableCont();

//Inserir dados na tabela
//insContent();