<?php

require_once "header.php";
require_once "/inc/Clientes.php";
require_once "/inc/functions.php";

echo '<h1>Listagem de clientes</h1>';
echo '<p>Clique no cliente para listar os dados</p>';

if(isset($_GET['order']) && $_GET['order'] == 'desc') {
    echo '<a href="/listagem-clientes">Ordenar por ordem ascendente</a>';

    listClientesDesc();
} else {

    echo '<a href="/listagem-clientes?order=desc">Ordenar por ordem descendente</a>';

    listClientesAsc();
}

require_once "footer.php";