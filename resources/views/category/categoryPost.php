<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/style.css" as="styles">
    <link rel="stylesheet" href="../../../public/css/bootstrap/bootstrap.min.css" as="styles">
    <link rel="stylesheet" href="../../../public/css/normalize.css" as="styles">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Agregar categoria</title>
</head>
<body>
    <h1 class="text-center">Agrega un nuevo dato</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form  action="category" method="post">
                    <label class="form-label" for="Name">Nombre</label>
                    <input class="form-control" type="text" name="Name" id="Name" required>
                    <input type="hidden" name="method" value="post">
                    <button name="" type="submit" class="btn btn-primary mt-2" >Guardar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>