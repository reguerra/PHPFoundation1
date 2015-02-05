<?php

require_once "Clientes.php";

define('ABSPATH',   dirname( __FILE__ ) . '/..');

define('DBHOST',    'localhost');
define('DBNAME',    'projeto');
define('DBUSER',    'root');
define('DBPASS',    '');


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
 * Conecta com o banco de dados via PDO
 * @return obj PDO
 */
function conexaoDB() {
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );

    try{
        $conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS, $options);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch (PDOException $e){
        die("<b>Erro codigo:</b> .{$e->getCode()}.\n.{$e->getMessage()}");
    }
}

/**
 * Verifica se o usuário está logado no site/sistema
 * @return bool
 */
function isUserLogged() {
   if (isset($_COOKIE['login']) && $_COOKIE['login'] == 'LOGGED') {
        return true;
    } else {
    return false;
}
}


/**
 * Verifica se o usuário e senha conferem no banco de dados e loga o usuário
 * @return bool
 */
function getUserLogin()
{
    $query = "SELECT * FROM login WHERE user=:user";
    $conexao = conexaoDB()->prepare($query);
    $senha = filter_input(INPUT_POST, 'senha');
    $user = filter_input(INPUT_POST, 'user');
    $conexao->bindValue(':user', $user);
    $conexao->execute();
    $resultado = $conexao->fetch(\PDO::FETCH_ASSOC);

    // Duração dos cookies
    $lifetime = 60 * 60 * 24;

    if ($user == $resultado['user'] && password_verify($senha, $resultado['senha'])) {
        setcookie('login', 'LOGGED', time() + $lifetime, '/');

        $setuser = $resultado['id'] . '|' . $resultado['user'];
        setcookie('user', $setuser, time() + $lifetime, '/');

        return true;
    } else {

        return false;
    }
}


/**
 * Retorna o id e nome do usuário logado.
 * @return object
 */
function getLoggedUser() {
    if (!isset($_COOKIE['user'])) return false;

    list($id, $name) = explode('|', $_COOKIE['user']);
    $user['id'] = $id;
    $user['name'] = $name;
    return (object) $user;
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
    $path = ABSPATH.'/templates/';
    $approve = false;

    if (empty($file)) $file = 'home';
    $rotasValidas = array(
        'empresa',
        'servicos',
        'produtos',
        'contato',
        'home',
        'admin',
        'newuser',
        'tela-login',
        'listagem-clientes',
        'cliente',
        'novo-cliente',
        'newclient'
    );

    if (in_array($file, $rotasValidas) && is_file($path.$file.".php")) {
        $approve = true;
    }

    if (isset($_GET['busca'])) {
        $file = 'busca';
        $approve = true;
    }

    if ($approve == false) {
        header("HTTP/1.0 404 Not Found");
        $file = '404';
    }

    require_once $path.$file.'.php';
}

/**
 * Retorna o conteúdo da página.
 * @return void
 */
function getContent() {
    $file = getPageFile();
    if (empty ($file)){$file = 'home';}
    $query = "SELECT conteudo FROM conteudo WHERE titulo=:file";
    $stmt = conexaoDB()->prepare($query);
    $stmt->bindValue('file', $file);
    $stmt->execute();
    $resultado = $stmt->fetchColumn();
    return $resultado;
}

/**
 * Exibe o conteúdo da página.
 * @return void
 */
function showContent() {
    echo getContent();
}

// funções MySQL

function delUser (){
    global $del;
    conexaoDB()->exec($del);
}

function criaUser (){
    global $cria;
    conexaoDB()->exec($cria);
}

function insUser (){
    $insere = "INSERT INTO login (user, senha) VALUES (:user, :senha);";
    $username = $_POST['username'];
    $pass = $_POST['senha'];
    $senha = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = conexaoDB()->prepare($insere);
    $stmt->bindValue('user', $username);
    $stmt->bindValue('senha', $senha);
    $stmt->execute();
}

