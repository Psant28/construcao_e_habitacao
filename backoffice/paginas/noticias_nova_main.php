<?php

$form = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]);

if($form){
    $imagem = $_GET["imagem"];
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    iduSQL("INSERT INTO noticias (imagem, titulo, texto) VALUES ('$imagem', '$titulo', '$texto')");
    
    echo "<script>window.location.href='noticias.php'</script>";
    exit();
}


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Adicionar Noticia</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="">
                <input type="text" name="imagem" placeholder="Url da Imagem" required>
                <br><br>
                <input type="text" name="titulo" placeholder="Titulo" required>
                <br><br>
                <input type="text" name="texto" placeholder="Texto" required>
                <br><br>
                <iframe src="http://localhost/construcao_e_habitacao/tinyfilemanager/tinyfilemanager.php"></iframe>
                <br><br>
                <input type="submit" value="Adicionar">
                <a href="noticias.php">
                    <button type="button">Voltar</button>
                </a>
            </form>
        </div>
    </div>

    
</main>