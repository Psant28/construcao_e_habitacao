<?php

$centro_ferias = getCentroDeFerias();

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-9 d-flex justify-content-center flex-column mx-auto p-0">
            <div class="separador mx-auto"></div>
            <h1 class="titulo-1"><?= $centro_ferias["titulo"] ?></h1>
            <p class="texto-1">
                <?= $centro_ferias["texto"] ?>
            </p> 
        </div>
    </div>
</main>