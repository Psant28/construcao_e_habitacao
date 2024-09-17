<?php

$destaques = getTodosDestaques();


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Destaques</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="destaques_novo.php">
                <input type="submit" value="Adicionar">
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 text-center d-flex justify-content-center">

            <table>
                <tr>
                    <th>ID</th>
                    <th>Imagem</th>
                    <th>Acções</th>
                </tr>

                <?php foreach($destaques as $d): ?>
                <tr>
                    <td><?= $d["id"] ?></td>
                    <td>
                        <img src="<?= $d["imagem"]; ?>" width="200" height="100">
                    </td>
                    <td style="white-space: nowrap;">
                        <form action="destaques_editar.php" style="display: inline-block;">
                            <button name="editar" value="<?= $d["id"]; ?>">Editar</button>
                        </form>
                        <form action="destaques_apagar.php" style="display: inline-block;">
                            <button name="apagar" value="<?= $d["id"]; ?>">Apagar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>