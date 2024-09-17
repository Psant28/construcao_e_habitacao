<?php

$exibir_botoes = 2;
$elemento_por_pagina = 6;
$pagina_atual = 1;

$form = isset($_GET["pagina"]);

if ($form) {
    $pagina_atual = intval($_GET["pagina"]);
}

$resultado = selectSQLUnico("SELECT COUNT(*) as total FROM noticias");
$total = $resultado["total"];
$total_paginas = ceil($total / $elemento_por_pagina);

if($pagina_atual < 1){
    $pagina_atual = 1;
}
elseif($pagina_atual >= $total_paginas){
    $pagina_atual = $total_paginas;
}

$ignorar = ($pagina_atual - 1) * $elemento_por_pagina;

$noticias = selectSQL("SELECT * FROM noticias LIMIT $elemento_por_pagina OFFSET $ignorar");

?>

<main class="container-fluid">

    <!-- Noticias -->
    <div class="row destaques">
        <div class="col-12 mt-2">
        <div class="separador mx-auto destaques"></div>
        <h1 class="text-center mb-4 mb-xl-5 noticias-titulo">Notícias</h1>
        </div>

        <!--Cards-->

        <!-- Desktop -->
        <div class="cards col-10 d-none d-lg-flex justify-content-center flex-wrap gap-4 mx-auto">

            <?php foreach($noticias as $i => $n): ?>
                <div class="card-noticias" style="width: 18rem;">
                    <img src="<?= $n["imagem"]; ?>" class="card-img-top-noticias" alt="Noticia <?= $i ?>">
                    <div class="card-body d-flex flex-wrap">
                        <h5 class="card-title-noticias pt-4 px-4 mb-3 mx-2"><?= $n["titulo"]; ?></h5>
                        <p class="card-text-noticias px-4 mx-2 mb-5 pb-2"><?= $n["texto"]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Mobile -->
        <div class="cards col-10 d-lg-none d-flex justify-content-center flex-wrap gap-3 mx-auto">

            <?php foreach($noticias as $i => $n): ?>
                <div class="card-noticias" style="width: 18rem;">
                    <img src="<?= $n["imagem"]; ?>" class="card-img-top-noticias" alt="Noticia <?= $i ?>">
                    <div class="card-body d-flex flex-wrap">
                        <h5 class="card-title-noticias"><?= $n["titulo"]; ?></h5>
                        <p class="card-text-noticias"><?= $n["texto"]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

            <!-- Paginação -->
        <div class="col-12 d-flex justify-content-center align-items-center paginacao mt-1 mt-lg-4">

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
        
   