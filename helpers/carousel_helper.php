<?php

function getTodosCarousel(){
    $resultado = selectSQL("SELECT * FROM carousel");
    return $resultado;
}

function getCarouselId($id){
    $resultado = selectSQLunico("SELECT * FROM carousel WHERE id=$id");
    return $resultado;
}

?>