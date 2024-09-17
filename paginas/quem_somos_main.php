<?php

$quem_somos = getQuemSomos();

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-9 d-flex justify-content-center flex-column mx-auto p-5">
            <div class="separador mx-auto"></div>
            <h1 class="titulo-1"><?= $quem_somos["titulo"] ?></h1>
            <p class="texto-1">
                <?= $quem_somos["texto"] ?>
            </p> 
        </div>
    </div>
</main>