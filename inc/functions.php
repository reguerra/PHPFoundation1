<?php

require_once PHP_ROOT.'/templates/newclient.php';
/**
 * Developer: Usado para debugar variáveis.
 */
function debug($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

/**
 * Developer: Usado para debugar variáveis.
 */
function dump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

/**
 * Aplica a classe CSS se o a página atual for a mesma do link
 * @param string $page
 * @return void
 */
function isActive ($page) {
    $route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = explode('/', substr($route['path'], 1));

    if ($path[0]==$page) {
        echo 'class="active"';
    }

    if (empty($path[0]) && $page=='home') {
        echo 'class="active"';
    }
}

/**
 * Retorna o nome do arquivo a ser chamado para a página atual.
 * @return string
 */
function getPageFile() {
    $route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = explode('/', substr($route['path'], 1));
    $file = $path[0];
    return $file;
}

/**
 * Chama o arquivo PHP referente a página atual
 * @return void
 */
function getRoute() {
    $file = getPageFile();
    $path = PHP_ROOT.'/templates/';
    $approve = false;

    if (empty($file)) $file = 'home';
    $rotasValidas = array(
        'home',
        'listagem-clientes',
        'cliente',
        'novo-cliente',
        'newclient',
        'dados'
    );

    if (in_array($file, $rotasValidas) && is_file($path.$file.".php")) {
        $approve = true;
    }

    if ($approve == false) {
        header("HTTP/1.0 404 Not Found");
        $file = '404';
    }

    require_once $path.$file.'.php';
}

function setClassif()
{ ?>
    <h5>Classifique o cliente abaixo</h5>
    <select name="classificacao">
        <option value="1">1 Estrela</option>
        <option value="2">2 Estrelas</option>
        <option value="3">3 Estrelas</option>
        <option value="4">4 Estrelas</option>
        <option value="5">5 Estrelas</option>
    </select><br><br>
<?php
}

function setEndCob()
{ ?>
    <h5>Cadastre um endereço de cobrança para o cliente abaixo</h5>
    <input type="text" name="endcob"><br><br>
<?php
}
