<?php

require_once "conexao_db.php";

echo "Executando fixture"."<br>"."<br>";

$conn = conexaoDB();

echo "Removendo tabela";
$conn->query("DROP TABLE IF EXISTS teste;");
echo " - OK"."<br>";

echo "Criando tabela";
$conn->query("CREATE TABLE teste (
  id INT NOT NULL AUTO INCREMENT,
  nome VARCHAR(91) CHARACTER SET 'utf-8' NULL,
  PRIMARY KEY (id));");
echo " - OK"."<br>";

echo "Inserindo dados";
for($x=0; $x<=9; $x++){
    $nome = "Teste {$x}";

    $stmt = $conn->prepare("INSERT INTO teste (nome) VALUE (:nome);");
    $stmt->bindParam(':nome', $nome);
    $stmt->execute();
}

echo " - OK"."<br>"."<br>";

echo "Concluído";