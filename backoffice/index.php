<?php

require_once("../requisitos.php");

verificarLogado();

$form = isset($_POST["login"]) && isset($_POST["pass"]);
if($form){
    $login = $_POST["login"];
    $pass = $_POST["pass"];

    $user = selectSQLunico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$pass'");
    
    if(!empty($user)){
        fazerLogin($user);
    }
    else{
        echo "<div class='vermelho'>Login Invalido!</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice - Construção e Habitacão</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
       
    <!-- CSS Local-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../fontes/stylesheet.css">
</head>
<body>
    
<main class="container-fluid">

    <div class="row mt-5">
        <div class="col-12 text-center mt-5">
            <h1>Login</h1>
            <div class="row">
                <div class="col-12 caixa">
                    <form action="" method="POST">
                        <input type="text" name="login" placeholder="Login" required autofocus autocomplete="off">
                        <br><br>
                        <input type="password" name="pass" placeholder="Password" required>
                        <br><br>
                        <input type="submit" value="Entrar">
                    </form>
                </div>
            </div>
            
        </div>
    </div>
   
</main>

<?php

require("componentes/footer.php");

?>