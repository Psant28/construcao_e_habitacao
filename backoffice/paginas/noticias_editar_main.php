<?php

$form = isset($_GET["editar"]);

if($form){
    $editar = intval($_GET["editar"]);
    $noticia = getNoticiasId($editar);
    
    $form2 = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);

    if($form2){
        $imagem = $_GET["imagem"];
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        iduSQL("UPDATE noticias SET imagem='$imagem', titulo='$titulo', texto='$texto' WHERE id=$editar");

        echo "<script>window.location.href='noticias.php'</script>";
        exit();
    }
    
}
else{
    echo "<script>window.location.href='noticias.php'</script>";
    exit();
}

?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Editar Noticia</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="">
                <input type="hidden" name="editar" value="<?= $editar; ?>">
                <input type="text" name="imagem" placeholder="Url da Imagem" value="<?=$noticia["imagem"]; ?>" required>
                <br><br>
                <input type="text" name="titulo" placeholder="Titulo" value="<?=$noticia["titulo"]; ?>" required>
                <br><br>
                <textarea name="texto" cols="30" rows="10" placeholder="Texto" required><?=$noticia["texto"]; ?></textarea>
                <br><br>
                <iframe src="http://localhost/construcao_e_habitacao/tinyfilemanager/tinyfilemanager.php"></iframe>
                <br><br>
                <input type="submit" value="Editar">
                <a href="carousel.php">
                    <button type="button">Voltar</button>
                </a>
            </form>
        </div>
    </div>

    
</main>