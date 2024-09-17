<?php

$form = isset($_GET["editar"]);

if($form){
    $editar = intval($_GET["editar"]);
    $empreendimentos = getEmpreendimentosId($editar);
    
    $form2 = isset($_GET["titulo"]) && isset($_GET["texto"]);

    if($form2){
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        iduSQL("UPDATE empreendimentos SET titulo='$titulo', texto='$texto' WHERE id=$editar");

        echo "<script>window.location.href='empreendimentos.php'</script>";
        exit();
    }
}
else{
    echo "<script>window.location.href='empreendimentos.php'</script>";
    exit();
}


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Editar Empreendimento</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="">
                <input type="hidden" name="editar" value="<?= $editar; ?>">
                <input type="text" name="titulo" placeholder="Titulo" value="<?=$empreendimentos["titulo"]; ?>" required>
                <br><br>
                <textarea name="texto" cols="30" rows="10" placeholder="Texto" required><?=$empreendimentos["texto"]; ?></textarea>
                <br><br>
                <input type="submit" value="Editar">
                <a href="empreendimentos.php">
                    <button type="button">Voltar</button>
                </a>
            </form>
        </div>
    </div>

    
</main>