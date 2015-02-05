<?php

require_once "header.php";
require_once "/inc/Clientes.php";
require_once "newclient.php";
require_once "/inc/functions.php";

echo '<h1>Listagem de clientes</h1>';
echo '<p>Clique no cliente para listar os dados</p>';

if(isset($_GET['order']) && $_GET['order'] == 'desc') {
    echo '<a href="/listagem-clientes">Ordenar por ordem ascendente</a>';

    rsort($clientes);
    echo '<ul>';
    foreach ($clientes as $cliente){
        $nome = $cliente->getNome(); ?>
        <li>
            <a href="/cliente?cliente=<?php echo $nome; ?>"><?php echo $nome;?></a>
        </li> <?php
    }
    echo '</ul>';
} else {

    echo '<a href="/listagem-clientes?order=desc">Ordenar por ordem descendente</a>';

    echo '<ul>';
    foreach ($clientes as $cliente){
        $nome = $cliente->getNome(); ?>
        <li>
        <a href="/cliente?cliente=<?php echo $nome; ?>"><?php echo $nome;?></a>
        </li> <?php
    }
    echo '</ul>';
}

require_once "footer.php";