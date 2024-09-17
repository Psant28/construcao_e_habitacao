<?php

function getBanner($pagina_atual){
    $resultado = selectSQL("SELECT imagem FROM banner WHERE pagina='$pagina_atual'");
    return $resultado;
}

function getTodosBanner(){
    $resultado = selectSQL("SELECT * FROM banner");
    return $resultado;
}

function getbannerId($id){
    $resultado = selectSQLunico("SELECT * FROM banner WHERE id=$id");
    return $resultado;
}

?>