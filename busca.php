<?php

require_once "conexao_bd.php";

require_once "header.php";

$busca = filter_input($_GET, "busca");
$search = "SELECT * FROM conteudo WHERE conteudo LIKE :busca OR titulo LIKE :busca";
$stmt = conexaoDB()->prepare($search);
$busca = "%{$busca}%";
$stmt->bindParam(":busca", $busca);
$stmt->execute();
$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

if (count($resultado)) {
    foreach($resultado as $res) {
        echo "<ul>";
        echo "<li>";
        echo "<a href=\"{$res['titulo']}\">{$res['titulo']}</a>";
        echo "</li>";
    }
    echo "</ul>";
}


require_once "footer.php";
