<?php

function conexaoDB(){

    try{
        $conn = new PDO("mysql:host=localhost;dbname=projeto","root","");
        return $conn;
    }
    catch (PDOException $e){
        die("Erro codigo: .{$e->getCode()}.\n.{$e->getMessage()}.\n.{$e->getTraceAsString()}");
    }
}


