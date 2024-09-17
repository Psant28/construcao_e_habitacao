<?php

$id= isset($_GET["id"]);

if($id){
    $empreendimento_id = intval($_GET["id"]);
    $empreendimento = selectSQLUnico("SELECT * FROM empreendimentos WHERE id = $empreendimento_id");
} 
?>

<main class="container-fluid">
    <div class="row">
        <div class="col-9 d-flex justify-content-center flex-column mx-auto p-0">
            <div class="separador mx-auto"></div>
            <h1 class="titulo-1 titulo-unico-1">Empreendimentos</h1>
            <h1 class="titulo-1 mt-0"><?= $empreendimento["titulo"] ?></h1>
            <p class="texto-1">
                <?= $empreendimento["texto"] ?>
            </p> 
        </div>
    </div>
</main>