<?php

function getTodosDestaques(){
    $resultado = selectSQL("SELECT * FROM destaques");
    return $resultado;
}

function getDestaquesId($id){
    $resultado = selectSQLunico("SELECT * FROM destaques WHERE id=$id");
    return $resultado;
}

function getTodosDestaquesHome(){
    $resultado = selectSQL("SELECT * FROM destaques WHERE ver_home=1");
    return $resultado;
}

?>