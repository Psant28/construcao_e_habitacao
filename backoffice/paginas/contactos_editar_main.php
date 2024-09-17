<?php

$form = isset($_GET["editar"]);
$contactos = getTodosContactos();
if($form){
    $editar = intval($_GET["editar"]);
    
    $contactos = getContactosId($editar);
    $form2 = isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["email"]) && isset($_GET["link_facebook"]) && isset($_GET["fax"]);

    if($form2){
        $telefone = $_GET["telefone"];
        $morada = $_GET["morada"];
        $email = $_GET["email"];
        $link_facebook = $_GET["link_facebook"];
        $fax = $_GET["fax"];

        iduSQL("UPDATE contactos SET telefone='$telefone', morada='$morada', email='$email', link_facebook='$link_facebook', fax='$fax' WHERE id=$editar");

        echo "<script>window.location.href='contactos.php'</script>";
        exit();
    }
    
}



?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Editar Contactos</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="">
                <input type="hidden" name="editar" value="<?= $editar; ?>">
                <input type="text" name="telefone" placeholder="Telefone" value="<?=$contactos["telefone"]; ?>" required>
                <br><br>
                <input type="text" name="morada" placeholder="Morada" value="<?=$contactos["morada"]; ?>" required>
                <br><br>
                <input type="text" name="email" placeholder="Email" value="<?=$contactos["email"]; ?>" required>
                <br><br>
                <input type="text" name="link_facebook" placeholder="Link do Facebook" value="<?=$contactos["link_facebook"]; ?>" required>
                <br><br>
                <input type="text" name="fax" placeholder="Fax" value="<?=$contactos["fax"]; ?>" required>
                <br><br>
                <input type="submit" value="Editar">
                <a href="contactos.php">
                    <button type="button">Voltar</button>
                </a>
            </form>
        </div>
    </div>

    
</main>