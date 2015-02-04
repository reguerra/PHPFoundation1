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

    echo '<form action="/update.php" name="update" method="post">';
    echo '<input type="text" name="page" value='.$file.'>';
    echo '<div id = "summernote">'.'<textarea name="conteudo">'.$conteudo.'</textarea>'.'</div>';
    echo '<input type="submit">';
    echo '</form>';
}

function delTableCont (){
    global $delTable;
    conexaoDB()->exec($delTable);
}

function delContent ()
{
    global $delContent;
    conexaoDB()->exec($delContent);
}

function criaTableCont (){
    global $criaTable;
    conexaoDB()->exec($criaTable);
}

function insContent (){
    global $insere;
    conexaoDB()->exec($insere);
}