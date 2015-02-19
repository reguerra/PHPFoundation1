<?php

require_once "newclient.php";

//echo $_SESSION['cliente2']['classificacao'];

global $clientes;

$cliente = $clientes[$_POST['cliente']];

$cliente->setDois();

header('location: /listagem-clientes');