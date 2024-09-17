<?php

$user = $_SESSION["user"];

$usuario_encontrado = $_SESSION["user"];

$id = $usuario_encontrado["id"];
$historico = selectSQL("SELECT * FROM acessos WHERE id_colaborador=$id ORDER BY id DESC");

?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Home</h1>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-12 text-center d-flex justify-content-center">
            <h3>Bem Vindo <?= $user["nome"] . " " . $user["apelido"] ?></h3>  
        </div>

        <div class="col-12">
            <table>
                <tr>
                    <th>Data de Acessos</th>
                </tr>

                <?php foreach($historico as $i => $h): ?>

                    <tr>
                        <td><?= $h["data"]; ?></td>
                    </tr>

                <?php endforeach; ?>

            </table>

        </div>
    </div>
</main>