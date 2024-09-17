<?php

$exibir_botoes = 2;
$elemento_por_pagina = 6;
$pagina_atual = 1;

$form = isset($_GET["pagina"]);

if ($form) {
    $pagina_atual = intval($_GET["pagina"]);
}

$resultado = selectSQLUnico("SELECT COUNT(*) as total FROM destaques");
$total = $resultado["total"];
$total_paginas = ceil($total / $elemento_por_pagina);

if($pagina_atual < 1){
    $pagina_atual = 1;
}
elseif($pagina_atual >= $total_paginas){
    $pagina_atual = $total_paginas;
}

$ignorar = ($pagina_atual - 1) * $elemento_por_pagina;

$destaques = selectSQL("SELECT * FROM destaques LIMIT $elemento_por_pagina OFFSET $ignorar");

?>

<main class="container-fluid">

    <!-- Noticias -->
    <div class="row destaques">
        <div class="col-12 mt-2">
        <div class="separador mx-auto destaques"></div>
        <h1 class="text-center mb-5 destaques-titulo">Destaques</h1>
        </div>

        <!--Cards-->
        
        <!-- Desktop -->
        <div class="cards col-10 d-none d-lg-flex justify-content-center flex-wrap gap-4 mx-auto">

            <?php foreach($destaques as $i => $d): ?>
                <div class="card card-destaques" style="width: 18rem;">
                    <img src="<?= $d["imagem"]; ?>" class="card-img-top" alt="Destaques <?= $i ?>">
                    <div class="card-body d-flex flex-wrap">
                        <h5 class="card-title"><?= $d["titulo"]; ?></h5>
                        <p class="card-text"><?= substr($d["texto"], 0, 400); ?>...</p>
                        <a href="destaque_unico.php?id=<?= $d["id"]; ?>" class="btn btn-primary position-absolute top-100 start-50 translate-middle">Ver Mais</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Mobile -->
        <div class="cards col-10 d-lg-none d-flex justify-content-center flex-wrap gap-4 mx-auto">

            <?php foreach($destaques as $i => $d): ?>
                <div class="card card-destaques" style="width: 18rem;">
                    <img src="<?= $d["imagem"]; ?>" class="card-img-top" alt="Destaques <?= $i ?>">
                    <div class="card-body d-flex flex-wrap">
                        <h5 class="card-title m-0"><?= $d["titulo"]; ?></h5>
                        <p class="card-text m-0"><?= substr($d["texto"], 0, 75); ?>...</p>
                        <a href="destaque_unico.php?id=<?= $d["id"]; ?>" class="btn btn-primary position-absolute top-100 start-50 translate-middle">Ver Mais</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Paginação -->
        <div class="col-12 d-flex justify-content-center align-items-center paginacao mt-4">

            <form action="">

                <?php if ($pagina_atual > 1) : ?>
                    <button name="pagina" value="<?= $pagina_atual - 1; ?>"><</button>
                <?php else: ?>
                    <button name="pagina" value="1"><</button>
                <?php endif; ?>

                <?php for($i=$pagina_atual-$exibir_botoes; $i<=$pagina_atual-1; $i++): ?>
                    <?php if($i > 0): ?>
                        <button name="pagina" value="<?= $i; ?>"><?= $i; ?></button>
                    <?php endif; ?>
                <?php endfor; ?>

                <button name="pagina" value="<?= $pagina_atual; ?>" class="active"><?= $pagina_atual; ?></button>

                <?php for($i=$pagina_atual+1; $i<=$pagina_atual+$exibir_botoes; $i++): ?>
                    <?php if($i <= $total_paginas): ?>
                        <button name="pagina" value="<?= $i; ?>"><?= $i; ?></button>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($pagina_atual < $total_paginas) : ?>
                    <button name="pagina" value="<?= $pagina_atual + 1; ?>">></button>
                <?php else: ?>
                    <button name="pagina" value="<?= $total_paginas; ?>">></button>
                <?php endif; ?>

            </form>
        </div>
    </div>
</main>  