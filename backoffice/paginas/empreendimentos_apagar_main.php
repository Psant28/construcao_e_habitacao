<?php

$form = isset($_GET["apagar"]);

if($form){
    $apagar = intval($_GET["apagar"]);

    $form_2 = isset($_GET["resposta"]);
    if($form_2 && $_GET["resposta"] == "sim"){
        iduSQL("DELETE FROM empreendimentos WHERE id=$apagar");
        
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
            <h1>Apagar Empreendimento</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <h3>Tem certeza de que deseja apagar o empreendimento (<?= $apagar; ?>)?</h3>

            <form action="">

                <input type="hidden" name="apagar" value="<?= $apagar; ?>">
                <button type="submit" name="resposta" value="sim">Sim</button>

                <a href="empreendimentos.php">
                    <button type="button">Não</button>
                </a>
            </form>
        </div>
    </div>

    
</main>