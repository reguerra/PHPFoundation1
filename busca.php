<?php

require_once "conexao_bd.php";

require_once "header.php";

$busca = $_GET['busca'];
$busca = mysql_real_escape_string($busca);
$search = "SELECT conteudo FROM conteudo WHERE conteudo LIKE '%$busca%' OR titulo LIKE '%$busca%';";
$resultado = conexaoDB()->query($search);
$links = $resultado->fetch(PDO::FETCH_ASSOC);


foreach ($links as $res) {
    $link = "/{$res['titulo']}";
    $titulo = $res['titulo'];
    echo "<a href=".$link.">".$titulo;
}

/*echo "<ul>";
//while ($resultado = mysql_fetch_assoc($busca)) {

foreach ($resultado as $res) {
    $titulo = $res['titulo'];
    $texto = $res['conteudo'];
    $link = "/{$res['titulo']}";
    echo "<li>";
echo "<a href=".$link." title=".$titulo.">".$titulo."</a><br>";
//echo "<p>".$texto."</p>";
//echo "<a href=".$link." title=".$titulo.">".$link."</a>";
echo "</li>";
}
echo "</ul>";

require_once "footer.php";*/
