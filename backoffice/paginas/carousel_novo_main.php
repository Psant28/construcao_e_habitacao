<?php

$form = isset($_GET["imagem"]);

if($form){
    $imagem = $_GET["imagem"];
    iduSQL("INSERT INTO carousel (imagem) VALUES ('$imagem')");
    
    echo "<script>window.location.href='carousel.php'</script>";
    exit();
}


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Adicionar Carousel</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="carousel.php">
                <input type="text" name="imagem" placeholder="Url da Imagem" required>
                <br><br>
                <iframe src="http://localhost/construcao_e_habitacao/tinyfilemanager/tinyfilemanager.php"></iframe>
                <br><br>
                <input type="submit" value="Adicionar">
                <a href="carousel.php">
                    <button type="button">Voltar</button>
                </a>
            </form>
        </div>
    </div>

    
</main>