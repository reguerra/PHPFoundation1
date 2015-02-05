<?php

require_once '/inc/Clientes.php';
require_once "/inc/functions.php";

$cliente1 = new Clientes('cliente1', 23, '12312312345', 'rua exemplo, 1');
$cliente2 = new Clientes('cliente2', 28, '11122233305', 'rua exemplo, 2');
$cliente3 = new Clientes('cliente3', 31, '33355577789', 'rua exemplo, 3');
$cliente4 = new Clientes('cliente4', 37, '88866677788', 'rua exemplo, 4');
$cliente5 = new Clientes('cliente5', 41, '55544433361', 'rua exemplo, 5');
$cliente6 = new Clientes('cliente6', 43, '77766611100', 'rua exemplo, 6');
$cliente7 = new Clientes('cliente7', 47, '55577733311', 'rua exemplo, 7');
$cliente8 = new Clientes('cliente8', 49, '44411133366', 'rua exemplo, 8');
$cliente9 = new Clientes('cliente9', 53, '55588877711', 'rua exemplo, 9');
$cliente10 = new Clientes('cliente10', 59, '10048866475', 'rua exemplo, 10');


$clientes = [
    'cliente1' => $cliente1,
    'cliente2' => $cliente2,
    'cliente3' => $cliente3,
    'cliente4' => $cliente4,
    'cliente5' => $cliente5,
    'cliente6' => $cliente6,
    'cliente7' => $cliente7,
    'cliente8' => $cliente8,
    'cliente9' => $cliente9,
    'cliente10' => $cliente10,
];