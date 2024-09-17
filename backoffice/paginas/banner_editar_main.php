<?php

$form = isset($_GET["editar"]);

if($form){
    $editar = intval($_GET["editar"]);
    $banner = getbannerId($editar);
    
    $form2 = isset($_GET["imagem"]);

    if($form2){
        $imagem = $_GET["imagem"];
        iduSQL("UPDATE banner SET imagem='$imagem' WHERE id=$editar");

        echo "<script>window.location.href='banner.php'</script>";
        exit();
    }

    
}
else{
    echo "<script>window.location.href='banner.php'</script>";
    exit();
}


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Editar Banner</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="">
                <input type="hidden" name="editar" value="<?= $editar; ?>">
                <input type="text" name="imagem" placeholder="Url da Imagem" value="<?=$banner["imagem"]; ?>" required>
                <br><br>
                <iframe src="http://localhost/construcao_e_habitacao/tinyfilemanager/tinyfilemanager.php"></iframe>
                <br><br>
                <input type="submit" value="Editar">
                <a href="banner.php">
                    <button type="button">Voltar</button>
                </a>
            </form>
        </div>
    </div>

    
</main>