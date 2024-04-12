<?php
$id = $_GET["Id"] ?? "";
$name = $_GET["name"] ?? "";     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>actualizar</title>
</head>
<body>
    <h1 class="text-center">Actualizar un nuevo dato</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
            <form action="category" method="put">
            <label class="form-label" for="Name">Nombre</label>
                <input class="form-control" type="text" name="Name" id="Name" value="<?= htmlspecialchars($name) ?>" required>
                <input type="hidden" name="method" value="put">
                <input type="hidden" name="Id" value="<?= $id ?>">
                <a href="http://localhost/pruebacrud/public/category" class="btn btn-primary mt-2">Guardar</a>
            </form>
            </div>
        </div>
    </div>
    <script>
</script>
</body>
</html>

