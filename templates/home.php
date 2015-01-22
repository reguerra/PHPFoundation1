<?php

require_once "header.php";

if (isUserLogged() == true) {
    require_once (__ROOT__."/admin/home-admin.php");
    die;
}

$query = "SELECT conteudo FROM conteudo WHERE titulo='home'";
$stmt = conexaoDB()->query($query);
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
echo $resultado['conteudo'];


require_once "footer.php";
