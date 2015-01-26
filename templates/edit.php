<?php

require_once(__ROOT__.'/inc/functions.php');

$rotasValidas = array(
    'empresa',
    'servicos',
    'produtos',
    'contato',
    'home',
);

echo '<ul>';

foreach ($rotasValidas as $pag) {
    $pagina = ucfirst($pag);
    echo '<li>';
    echo '<a href='."/$pag".'>'.$pagina.'</a>';
    echo '</li>';
}

echo '</li>';