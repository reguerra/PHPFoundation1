<?php

require_once "header.php";

$query = "SELECT conteudo FROM conteudo WHERE titulo='empresa'";
$stmt = conexaoDB()->query($query);
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);
echo $resultado['conteudo'];

require_once "footer.php";