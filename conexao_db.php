<?php

function conexaoDB(){
    try{
        new PDO("mysql:host=localhost;dbname=toc_bd","root","");
    }
    catch (PDOException $e){
        die("Erro codigo".'\n'.$e->getMessage().'\n'.$e->getTraceAsString());
    }
}