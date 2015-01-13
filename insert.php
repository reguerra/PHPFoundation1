<?php

require_once "conexao_bd.php";
require_once "conteudo.php";

//conexaoDB()->exec("CREATE TABLE `projeto`.`conteudo` (
//  `id` INT NOT NULL AUTO_INCREMENT,
//  `titulo` VARCHAR(45) NULL,
// `conteudo` LONGTEXT NULL,
// PRIMARY KEY (`id`))
//ENGINE = InnoDB
//DEFAULT CHARACTER SET = utf8;
//");

$cont0 = print_r($conteudo[0][0]);
$cont1 = print_r($conteudo[0][1]);

$exec = "INSERT INTO conteudo(titulo, conteudo) VALUES ($cont0, $cont1);";

conexaoDB()->exec($exec);