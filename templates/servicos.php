<?php

require_once "header.php";

if (isUserLogged() == true) {
    require_once (__ROOT__."/admin/servicos-admin.php");
    echo '<h5><a href="../templates/admin.php">Clique aqui para voltar para a página de administração do site</a></h5>';
    die;
}

showContent();

require_once "footer.php";