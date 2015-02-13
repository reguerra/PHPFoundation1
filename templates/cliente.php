<?php

require_once 'newclient.php';
require_once 'header.php';

$cliente = $clientes[$_GET['cliente']];
$cliente->showClienteInd();

require_once 'footer.php';