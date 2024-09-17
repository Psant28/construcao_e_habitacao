<?php

function getCentroDeFerias(){
    $resultado = selectSQLUnico("SELECT * FROM menu_simples WHERE id=3");

    return $resultado;
}

?>