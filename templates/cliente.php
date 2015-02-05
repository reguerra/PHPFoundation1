<?php

require_once "/inc/Clientes.php";
require_once "newclient.php";
require_once "header.php";

$nome = $_GET['cliente'];
$cliente = $clientes[$nome];

echo '<h3>'.$cliente->getNome().'</h3><br>';
echo $cliente->getNome().'<br>';
echo $cliente->getIdade().'<br>';
echo $cliente->getCpf().'<br>';
echo $cliente->getEndereco().'<br>';

?>
<br><br><br>
<a href="/listagem-clientes">Clique aqui para voltar para a lista de clientes cadastrados</a>

<?php

require_once "footer.php";