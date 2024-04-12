<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Agregar producto</title>
</head>
<body>
    <h1 class="text-center">Agrega un nuevo dato</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form  action="category" method="post">
                    <label class="form-label" for="Code">Code</label>
                    <input class="form-control" type="text" name="Code" id="Code">

                    <label class="form-label" for="Name">Name</label>
                    <input class="form-control" type="text" name="Name" id="Name">

                    <label class="form-label" for="Price">Price</label>
                    <input class="form-control" type="number" name="Price" id="Price">

                    <label class="form-label" for="CategoryId">CategoryId</label>
                    <input class="form-control" type="number" name="CategoryId" id="CategoryId">

                    <input type="hidden" name="method" value="post">
                    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>