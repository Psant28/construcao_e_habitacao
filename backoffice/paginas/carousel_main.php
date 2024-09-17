<?php

$carousel = getTodosCarousel();


?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Carousel</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <form action="carousel_novo.php">
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

                <?php foreach($carousel as $c): ?>
                <tr>
                    <td><?= $c["id"] ?></td>
                    <td>
                        <img src="<?= $c["imagem"]; ?>" width="200" height="100">
                    </td>
                    <td>
                        <form action="carousel_editar.php" class="d-inline-block">
                            <button name="editar" value="<?= $c["id"]; ?>">Editar</button>
                        </form>
                        <form action="carousel_apagar.php" class="d-inline-block">
                            <button name="apagar" value="<?= $c["id"]; ?>">Apagar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>