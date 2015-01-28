<?php
require_once ABSPATH.'/inc/functions.php';

function runSummernote() {

    $file = getPageFile();
    if (empty ($file)){
        $file = "home";
    }
    getRoute();
    $conteudo = getContent(); ?>

    <script>
    $(document) . ready(function () {
    $('#summernote') . summernote();
    })
    </script>

    <form action="../admin/update.php" name="update" method="post">
    <input type="text" name="page" value=<?php echo $file?>>
    <div id = "summernote">
        <textarea name="conteudo">
            <?php echo $conteudo ?>
        </textarea>
    </div>
    <input type="submit">
    </form> <?php
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