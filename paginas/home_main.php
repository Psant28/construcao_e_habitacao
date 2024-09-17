<?php

$texto_quem_somos = getQuemSomosAbreviado();

$destaques = getTodosDestaquesHome();

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-9 d-flex justify-content-center flex-column mx-auto p-0">
        <div class="separador mx-auto"></div>
        <h1 class="titulo-1">Bem-vindo à 
            <br>
            Cooperativa de Construção e Habitação Tripeira</h1>
        <p class="texto-1 text-justify">
            <?= $texto_quem_somos ?>...
        </p> 
        <a href="quem_somos.php" class="mx-auto">
            <button class="botao-1 mx-auto mt-4 mb-3">VER MAIS</button>
        </a>
        </div>
    </div>

    <!-- Destaques -->
    <div class="row ">
        <div class="col-12 mt-5 destaques">
        <div class="separador mx-auto"></div>
        <h1 class="text-center">Destaques</h1>
        </div>

        <!--Cards-->
        <div class="cards col-10 d-flex justify-content-center flex-wrap gap-4 mx-auto">

            <?php foreach($destaques as $i => $d): ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $d["imagem"]; ?>" class="card-img-top" alt="Destaques <?= $i ?>">
                    <div class="card-body d-flex flex-wrap">
                        <h5 class="card-title"><?= $d["titulo"]; ?></h5>
                        <p class="card-text"><?= substr($d["texto"], 0, 75); ?>...</p>
                        <a href="destaque_unico.php?id=<?= $d["id"]; ?>" class="btn btn-primary position-absolute top-100 start-50 translate-middle">Ver Mais</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

</main>