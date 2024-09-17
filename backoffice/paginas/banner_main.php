<?php

$banner = getTodosBanner();


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Banners</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 text-center d-flex justify-content-center">

            <table>
                <tr>
                    <th>ID</th>
                    <th>Pagina</th>
                    <th>Imagem</th>
                    <th>Acções</th>
                </tr>

                <?php foreach($banner as $b): ?>
                <tr>
                    <td><?= $b["id"] ?></td>
                    <td><?= $b["pagina"] ?></td>
                    <td>
                        <img src="<?= $b["imagem"]; ?>" width="200" height="100">
                    </td>
                    <td>
                        <form action="banner_editar.php" class="d-inline-block">
                            <button name="editar" value="<?= $b["id"]; ?>">Editar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>