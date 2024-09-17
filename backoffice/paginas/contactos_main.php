<?php

$contactos = getContactos();

?>

<main class="container-fluid">
    <div class="row my-3">
        <div class="col-12 text-center">
            <h1>Contactos</h1>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 text-center d-flex justify-content-center">

            <table>
                <tr>
                    <th>Id</th>
                    <th>Telefone</th>
                    <th>Morada</th>
                    <th>E-mail</th>
                    <th>Link do Facebook</th>
                    <th>Fax</th>
                    <th>Acções</th>
                </tr>

                <?php foreach($contactos as $c): ?>
                <tr>
                    <td><?= $c["id"] ?></td>
                    <td><?= $c["telefone"] ?></td>
                    <td><?= $c["morada"] ?></td>
                    <td><?= $c["email"] ?></td>
                    <td><?= $c["link_facebook"] ?></td>
                    <td><?= $c["fax"] ?></td>
                    <td style="white-space: nowrap;">
                        <form action="contactos_editar.php" style="display: inline-block;">
                            <button name="editar" value="<?= $c["id"]; ?>">Editar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</main>