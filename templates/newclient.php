<?php

require_once PHP_ROOT.'/inc/Cliente.php';
require_once PHP_ROOT.'/inc/ClientePF.php';
require_once PHP_ROOT.'/inc/ClientePJ.php';


//Clientes Pessoa Física

$cliente1 = new ClientePF();
$cliente1->setNome('cliente1')
    ->setIdade(23)
    ->setCpf('12312312345')
    ->setEndereco('rua exemplo, 1')
    ->setClassificacao(2);

$cliente2 = new ClientePF();
$cliente2->setNome('cliente2')
    ->setIdade(28)
    ->setCpf('11122233305')
    ->setEndereco('rua exemplo, 2')
    ->setEndcobranca('rua cobranca, 3');

$cliente3 = new ClientePF();
$cliente3->setNome('cliente3')
    ->setIdade(31)
    ->setCpf('33355577789')
    ->setEndereco('rua exemplo, 3');


$cliente4 = new ClientePF();
$cliente4->setNome('cliente4')
    ->setIdade(37)
    ->setCpf('88866677788')
    ->setEndereco('rua exemplo, 4')
    ->setEndcobranca('rua cobranca, 5')
    ->setClassificacao(3);

$cliente5 = new ClientePF();
$cliente5->setNome('cliente5')
    ->setIdade(41)
    ->setCpf('55544433361')
    ->setEndereco('rua exemplo, 5');


$cliente6 = new ClientePF();
$cliente6->setNome('cliente6')
    ->setIdade(43)
    ->setCpf('77766611100')
    ->setEndereco('rua exemplo, 6')
    ->setEndcobranca('rua cobranca, 7')
    ->setClassificacao(4);

$cliente7 = new ClientePF();
$cliente7->setNome('cliente7')
    ->setIdade(47)
    ->setCpf('55577733311')
    ->setEndereco('rua exemplo, 7')
    ->setClassificacao(5);

$cliente8 = new ClientePF();
$cliente8->setNome('cliente8')
    ->setIdade(49)
    ->setCpf('44411133366')
    ->setEndereco('rua exemplo, 8')
    ->setClassificacao(5);

$cliente9 = new ClientePF();
$cliente9->setNome('cliente9')
    ->setIdade(53)
    ->setCpf('55588877711')
    ->setEndereco('rua exemplo, 9');


$cliente10 = new ClientePF();
$cliente10->setNome('cliente10')
    ->setIdade(59)
    ->setCpf('10048866475')
    ->setEndereco('rua exemplo, 10')
    ->setEndcobranca('rua cobranca, 11');


//Clientes Pessoa Jurídica

$pj1 = new ClientePJ();
$pj1->setNome('pj1')
    ->setCnpj('11122233355577')
    ->setEndereco('rua pj, 1')
    ->setEndcobranca('rua cobranca, 1')
    ->setClassificacao(4);

$pj2 = new ClientePJ();
$pj2->setNome('pj2')
    ->setCnpj('22244466688800')
    ->setEndereco('rua pj, 2')
    ->setClassificacao(3);

$pj3 = new ClientePJ();
$pj3->setNome('pj3')
    ->setCnpj('77788899900011')
    ->setEndereco('rua pj, 3')
    ->setClassificacao(3);

$pj4 = new ClientePJ();
$pj4->setNome('pj4')
    ->setCnpj('22200022244466')
    ->setEndereco('rua pj, 4')
    ->setEndcobranca('rua cobranca, 4');


$pj5 = new ClientePJ();
$pj5->setNome('pj5')
    ->setCnpj('66677788833311')
    ->setEndereco('rua pj, 5')
    ->setEndcobranca('rua cobranca, 5');


$pj6 = new ClientePJ();
$pj6->setNome('pj6')
    ->setCnpj('33366699912121')
    ->setEndereco('rua pj, 6')
    ->setClassificacao(3);

$pj7 = new ClientePJ();
$pj7->setNome('pj7')
    ->setCnpj('44455566622233')
    ->setEndereco('rua pj, 7')
    ->setEndcobranca('rua cobranca, 7')
    ->setClassificacao(5);

$pj8 = new ClientePJ();
$pj8->setNome('pj8')
    ->setCnpj('88811188811133')
    ->setEndereco('rua pj, 8')
    ->setClassificacao(5);

$pj9 = new ClientePJ();
$pj9->setNome('pj9')
    ->setCnpj('11144477700022')
    ->setEndereco('rua pj, 9')
    ->setEndcobranca('rua cobranca, 9');


$pj10 = new ClientePJ();
$pj10->setNome('pj10')
    ->setCnpj('11122233355577')
    ->setEndereco('rua pj, 10')
    ->setClassificacao(4);

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
    'pj1' => $pj1,
    'pj2' => $pj2,
    'pj3' => $pj3,
    'pj4' => $pj4,
    'pj5' => $pj5,
    'pj6' => $pj6,
    'pj7' => $pj7,
    'pj8' => $pj8,
    'pj9' => $pj9,
    'pj10' => $pj10,
];

if (isset ($_GET['cliente']) && ! empty ($_GET['cliente'])) {
    $cliente = $clientes[$_GET['cliente']];

    $cliente->setDois();
}