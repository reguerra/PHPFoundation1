<?php
/**
 * todo Fazer uma lista to do.

$route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = explode('/', substr($route['path'], 1));

echo "<pre>";
print_r($path);
echo "</pre>";
die;
*/

function getRoute() {
    $route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $path = explode('/', substr($route['path'], 1));
    $file = $path[0];

    if (empty($file)) $file = 'home';
    $rotasValidas = array(
        'empresa',
        'servicos',
        'produtos',
        'contato',
        'home'
    );
    if (!in_array($file, $rotasValidas) || !is_file($file.".php")) {
        header("HTTP/1.0 404 Not Found");
        $file = '404';
    }


    require_once $file.'.php';
}
getRoute();