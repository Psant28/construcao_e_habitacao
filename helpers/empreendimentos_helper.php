<?php

    function getTodosEmpreendimentosMenu(){
        $resultado = selectSQL("SELECT id, titulo FROM empreendimentos");
        return $resultado;
    }

    function getTodosEmpreendimentos(){
        $resultado = selectSQL("SELECT * FROM empreendimentos");
        return $resultado;
    }

    function getEmpreendimentosId($id){
        $resultado = selectSQLunico("SELECT * FROM empreendimentos WHERE id=$id");
        return $resultado;
    }

?>