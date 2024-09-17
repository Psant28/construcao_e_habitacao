<?php

function getTodosContactos(){
    $resultado = selectSQLunico("SELECT * FROM contactos WHERE id=1");
    return $resultado;
}

function getContactos(){
    $resultado = selectSQL("SELECT * FROM contactos");
    return $resultado;
}

function getContactosId($id){
    $resultado = selectSQLunico("SELECT * FROM contactos WHERE id=$id");
    return $resultado;
}

?>