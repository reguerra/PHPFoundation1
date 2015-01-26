<?php

require_once "header.php";

$busca = filter_input(INPUT_GET, "busca");
$search = "SELECT * FROM conteudo WHERE conteudo LIKE :busca OR titulo LIKE :busca";
$stmt = conexaoDB()->prepare($search);
$busca = "%{$busca}%";
$stmt->bindParam(":busca", $busca);
$stmt->execute();
$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

echo '<h1>Resultado da busca</h1>';
if (count($resultado)) {
	echo "<ul>";
    foreach($resultado as $res) {
		$pagina = $res['titulo'];
		$pag = ucfirst($pagina);
        echo "<li>";
        	echo "<a href=\"{$pagina}\">{$pag}</a>";
    	echo "</li>";
    }
	echo "</ul>";
} else {
	echo '<p>Nenhum resultado encontrado com esse critérios.</p>';
}


require_once "footer.php";
