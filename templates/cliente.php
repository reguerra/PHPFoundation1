<?php

require_once 'newclient.php';
require_once 'header.php';
require_once PHP_ROOT.'/inc/functions.php';
require_once PHP_ROOT.'/inc/ShowCliente.php';

global $clientes;
$cliente = $clientes[$_GET['cliente']];
if ($cliente instanceof ClientePF){
    $repo = new ShowCliente($cliente);
    $repo->showClienteIndPF($cliente);
}
if ($cliente instanceof ClientePJ){
    $repo = new ShowCliente($cliente);
    $repo->showClienteIndPJ($cliente);
}


require_once 'footer.php';