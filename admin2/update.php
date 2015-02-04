<?php

require_once '../inc/functions.php';

$page = $_POST['page'];
$update = $_POST['conteudo'];

$query = "UPDATE conteudo SET conteudo='$update' WHERE titulo='$page';";
$resultado = conexaoDB()->exec($query);

header('location: ../templates/admin2.php');