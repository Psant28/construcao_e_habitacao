<?php

$form = isset($_GET["titulo"]) && isset($_GET["texto"]);

if($form){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    iduSQL("INSERT INTO empreendimentos (titulo, texto) VALUES ('$titulo', '$texto')");
    header("Location: empreendimentos.php");
    exit();
}

?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Adicionar Empreendimento</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="">
                <input type="text" name="titulo" placeholder="Titulo" required>
                <br><br>
                <input type="text" name="texto" placeholder="Texto" required>
                <br><br>
                <iframe src="http://localhost/construcao_e_habitacao/tinyfilemanager/tinyfilemanager.php"></iframe>
                <br><br>
                <input type="submit" value="Adicionar">
                <a href="empreendimentos.php">
                    <button type="button">Voltar</button>
                </a>
            </form>
        </div>
    </div>

    
</main>