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
    echo '<li>';
    echo '<a href='."/$pag".'>'.$pag.'</a>';
    echo '</li>';
}

echo '</li>';