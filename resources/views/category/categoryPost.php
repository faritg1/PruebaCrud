<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Agrega un nuevo dato</h1>
    <form action="/category" method="post">

        <label for="Name">Nombre</label>
        <input type="text" name="Name" id="Name">

        <input type="hidden" name="method" value="post">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>