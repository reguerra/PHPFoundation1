<?php
require_once ABSPATH.'/inc/functions.php';

function runSummernote() {

    $file = getPageFile();
    if (empty ($file)){
        $file = "home";
    }
    getRoute();
    $conteudo = getContent();

    echo '<script>';
    echo '$(document) . ready(function () {';
    echo "$('#summernote') . summernote();";
    echo '})';
    echo '</script>';

    echo '<form action="../admin/update.php" name="update" method="post">';
    echo '<input type="text" name="page" value='.$file.'>';
    echo '<div id = "summernote">'.'<textarea name="conteudo">'.$conteudo.'</textarea>'.'</div>';
    echo '<input type="submit">';
    echo '</form>';
}