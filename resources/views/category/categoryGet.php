<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas CATEGORIA</title>
</head>
<body>
    <h1>Lista de categoria</h1>
    <?php foreach ($rel as $fila): ?>
        <?php foreach ($fila as $value): ?>
            <li>Id <?= $value["Id"]?> Name <?= $value["Name"]?> </li>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>