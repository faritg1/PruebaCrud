<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listas productos</title>
</head>
<body>
<h1 class="text-center">Lista de productos</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9"> 
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Category Id</th>
                            <th scope="col">Date Create</th>
                            <th scope="col">Date Update</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rel as $fila): ?>
                            <tr>
                                <?php foreach ($fila as $value): ?>
                                    <td><?= $value ?></td>
                                <?php endforeach; ?>
                                <td>
                                    <a href="http://localhost/pruebacrud/resources/views/product/productPut.php?id=<?= $fila[0] ?>?code=<?= $fila[1]?>">
                                        <button type="button" class="btn btn-success">Actualizar</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="/pruebacrud/public/product/create"><button type="submit" class="btn btn-primary mb-2">Agregar nuevo</button></a>
            </div>
        </div>
    </div>
</body>
</html>