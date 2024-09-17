<?php

function getTodasNoticias(){
    $resultado = selectSQL("SELECT * FROM noticias");
    return $resultado;
}

function getNoticiasId($id){
    $resultado = selectSQLunico("SELECT * FROM noticias WHERE id=$id");
    return $resultado;
}

?>