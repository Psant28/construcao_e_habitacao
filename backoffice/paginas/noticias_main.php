<?php

$noticias = getTodasNoticias();


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Noticias</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="noticias_nova.php">
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
                    <th>Titulo</th>
                    <th>Acções</th>
                </tr>

                <?php foreach($noticias as $n): ?>
                <tr>
                    <td><?= $n["id"] ?></td>
                    <td>
                        <img src="<?= $n["imagem"]; ?>" width="200" height="100">
                    </td>
                    <td><?= $n["titulo"] ?></td>
                    <td style="white-space: nowrap;">
                        <form action="noticias_editar.php" style="display: inline-block;">
                            <button name="editar" value="<?= $n["id"]; ?>">Editar</button>
                        </form>
                        <form action="noticias_apagar.php" style="display: inline-block;">
                            <button name="apagar" value="<?= $n["id"]; ?>">Apagar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>