<?php

$form = isset($_GET["id"]);

if($form){
    $id = intval($_GET["id"]);
    $menu_simples = getMenuSimplesId($id);
    
    $form2 = isset($_GET["titulo"]) && isset($_GET["texto"]);

    if($form2){
        $titulo = $_GET["titulo"];
        $texto = $_GET["texto"];
        iduSQL("UPDATE menu_simples SET titulo='$titulo' , texto='$texto' WHERE id=$id");

        echo "<script>window.location.href='menu_simples.php?id=" . $id . "'</script>";
        exit();
    }
}
else{
    echo "<script>window.location.href='menu_simples.php?id=" . $id . "'</script>";
    exit();
}

?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Menu Simples - Editar (<?= $menu_simples["titulo"]; ?>)</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="">
                <input type="hidden" name="id" value="<?= $id; ?>">
                
                <input type="text" name="titulo" placeholder="Titulo" value="<?=$menu_simples["titulo"]; ?>" required>
                <br><br>
                <textarea name="texto" cols="30" rows="10" placeholder="Texto"><?=$menu_simples["texto"]; ?></textarea>
                <br><br>
                <input type="submit" value="Editar">
            </form>
        </div>
    </div>

    
</main>