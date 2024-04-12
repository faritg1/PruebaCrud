<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];

    if (isset($_GET["confirm"]) && $_GET["confirm"] === "yes") {
        header("Location: http://localhost/pruebacrud/public/product/delete?id=$id");
        exit;
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <title>Confirmar eliminación</title>
        </head>
        <body>
            <h1 class="text-center">Eliminar producto</h1>
            <p class="text-center">¿Estás seguro de que deseas eliminar el producto con ID <?= $id ?>?</p>
            <div class="text-center">
                <a class="btn btn-danger" href="http://localhost/pruebacrud/public/product/delete?id=<?= $id ?>&confirm=yes">Sí, eliminar</a>
                <a class="btn btn-success" href="http://localhost/pruebacrud/public/product/">Cancelar</a>
            </div>
        </body>
        </html>
        <?php
    }
}
?>
