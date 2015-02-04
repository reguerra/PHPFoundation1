<?php

require_once "header.php";

$file = getPageFile();

if (isUserLogged() == true) {
    require_once(__ROOT__ . "/admin2/admin-edit.php");
    echo '<h5><a href="../templates/admin2.php">Clique aqui para voltar para a página de administração do site</a></h5>';
    die;
}

$file = ucfirst($file);
echo '<h1>'.$file.'</h1>';

showContent();

require_once "footer.php";