<?php

$id= isset($_GET["id"]);

if($id){
    $destaque_id = intval($_GET["id"]);
    $destaque = selectSQLUnico("SELECT * FROM destaques WHERE id = $destaque_id");
} 
?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center flex-column mx-auto p-0">
            <div class="separador mx-auto"></div>
            <h1 class="titulo-1 titulo-unico-1">Destaques</h1>
            <h1 class="titulo-1 mt-0"><?= $destaque["titulo"] ?></h1>
            <p class="texto-1">
                <?= $destaque["texto"] ?>
            </p> 
        </div>
        <div class="col-10 botao-destaques d-flex justify-content-end p-0 mt-5">
            <a href="destaques.php" class="">VOLTAR PARA DESTAQUES</a>      
        </div>
    </div>
</main>

