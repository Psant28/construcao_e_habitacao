<?php

$form = isset($_GET["editar"]);

if($form){
    $editar = intval($_GET["editar"]);
    $destaques = getDestaquesId($editar);
    
    $form2 = isset($_GET["imagem"]) && isset($_GET["titulo"]) && isset($_GET["texto"]) && isset($_GET["ver_home"]);

    if($form2){
        $imagem = $_GET["imagem"];
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        $ver_home = $_GET["ver_home"];
        iduSQL("UPDATE destaques SET imagem='$imagem', titulo='$titulo', texto='$texto', ver_home='$ver_home' WHERE id=$editar");

        echo "<script>window.location.href='destaques.php'</script>";
        exit();
    }
 
}
else{
    echo "<script>window.location.href='destaques.php'</script>";
    exit();
}


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Editar Destaques</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="">
                <input type="hidden" name="editar" value="<?= $editar; ?>">
                <input type="text" name="imagem" placeholder="Url da Imagem" value="<?=$destaques["imagem"]; ?>" required>
                <br><br>
                <input type="text" name="titulo" placeholder="Titulo" value="<?=$destaques["titulo"]; ?>" required>
                <br><br>
                <label for="">Deseja ver na Home?</label>
                <select name="ver_home" required>
                    <option value=""></option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
                <br><br>
                <textarea name="texto" cols="30" rows="10" placeholder="Texto" required><?=$destaques["texto"]; ?></textarea>
                <br><br>
                <iframe src="http://localhost/construcao_e_habitacao/tinyfilemanager/tinyfilemanager.php"></iframe>
                <br><br>
                <input type="submit" value="Editar">
                <a href="destaques.php">
                    <button type="button">Voltar</button>
                </a>
            </form>
        </div>
    </div>

    
</main>