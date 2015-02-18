<?php

require_once "newclient.php";

//echo $_SESSION['cliente2']['classificacao'];


$cliente = $clientes[$_POST['cliente']];

$cliente->setDois();

header('location: /listagem-clientes');