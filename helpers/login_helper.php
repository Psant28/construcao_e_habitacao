<?php

session_start();
date_default_timezone_set("Europe/Lisbon");

function verificarNaoLogado(){
    if(empty($_SESSION["user"])){
        echo "<script>window.location.href='index.php'</script>";
        exit();
    }
}

function verificarLogado(){
    if(!empty($_SESSION["user"])){
        echo "<script>window.location.href='home.php'</script>";
        exit();
    }
}

function fazerLogin($user){
    if(!empty($user)){
        $id = $user["id"];
        $data_atual = date("H:i:s - d/m/Y");
        iduSQL("INSERT INTO acessos (data, id_colaborador) VALUES ('$data_atual', $id)");
        $_SESSION["user"] = $user;
        
        echo "<script>window.location.href='home.php'</script>";
        exit();
    }
}

?>