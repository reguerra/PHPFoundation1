<?php
/**
 * todo Fazer uma lista to do.
 */
function getRoute($page) {
    if (empty($page)) $page = 'home';
    $rotasValidas = array(
        'empresa',
        'servicos',
        'produtos',
        'contato',
        'home'
    );

    if (!in_array($page, $rotasValidas)) {
        header("HTTP/1.0 404 Not Found");
        $page = '404';
    }
    require_once $page.'.php';
}
getRoute($_GET['page']);



/*
function getRoute($page) {
    if (!isset($page)) {
        require_once "home.php";
    } else {
        switch ($page) {
            case "empresa":
                require_once "empresa.php";
                break;
            case "servicos":
                require_once "servicos.php";
                break;
            case "produtos":
                require_once "produtos.php";
                break;
            case "contato":
                require_once "contato.php";
                break;
            case "home":
                require_once "home.php";
                break;
            default:
                header("HTTP/1.0 404 Not Found");
                require_once "404.php";
                break;
        }
    }
}
*/