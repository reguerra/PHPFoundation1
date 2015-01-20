<?php

require_once(__ROOT__.'/inc/functions.php');

$rotasValidas = array(
    'empresa',
    'servicos',
    'produtos',
    'contato',
    'home',
    'admin'
);

echo '<ul>';

foreach ($rotasValidas as $pag) {
    echo '<li>';
    echo '<a href=/templates/'.$pag.'.php>'.$pag.'</a>';
    echo '</li>';
}

echo '</li>';