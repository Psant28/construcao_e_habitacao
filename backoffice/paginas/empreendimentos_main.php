<?php

$empreendimentos = getTodosEmpreendimentos();


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Empreendimentos</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="empreendimentos_novo.php">
                <input type="submit" value="Adicionar">
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 text-center d-flex justify-content-center">

            <table>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Acções</th>
                </tr>

                <?php foreach($empreendimentos as $e): ?>
                <tr>
                    <td><?= $e["id"] ?></td>
                    <td><?= $e["titulo"] ?></td>
                    <td style="white-space: nowrap;">
                        <form action="empreendimentos_editar.php" style="display: inline-block;">
                            <button name="editar" value="<?= $e["id"]; ?>">Editar</button>
                        </form>
                        <form action="empreendimentos_apagar.php" style="display: inline-block;">
                            <button name="apagar" value="<?= $e["id"]; ?>">Apagar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>