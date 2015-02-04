<?php

require_once "header.php";

//require_once(__ROOT__.'/inc/functions.php');
//require_once(__DIR__ . '/../inc/functions.php');
?>


<h1>Página de administração</h1>

<p>Clique na página para editar seu conteúdo</p>

<?php
if (getLoggedUser() == false) {
    header ('location: /');
} else {
    require_once "edit.php";
}

require_once "footer.php";