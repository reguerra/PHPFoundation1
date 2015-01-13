<?php

require_once "header.php";

require_once "conexao_bd.php";

$query = "SELECT conteudo FROM conteudo WHERE titulo='contato'";
$stmt = conexaoDB()->query($query);
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
echo $resultado['conteudo'];

require_once "footer.php";