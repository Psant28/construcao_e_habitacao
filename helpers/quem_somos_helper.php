<?php

function getQuemSomosAbreviado(){
    $resultado = selectSQLUnico("SELECT texto FROM menu_simples WHERE id=1");
    $texto = $resultado["texto"];

    $texto_abreviado = substr($texto, 0, 500);

    return $texto_abreviado;
}

function getQuemSomos(){
    $resultado = selectSQLUnico("SELECT * FROM menu_simples WHERE id=1");

    return $resultado;
}

?>