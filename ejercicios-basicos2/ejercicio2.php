<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    $size = rand(20,60);
    ?>
    <h1>Saludo</h1>
    <p>Actualice la pagina para cambiar el tamaño de saludo</p>
    <?php
    echo "<p style='font-size:$size"."px'>Hola</p>";
    ?>
</body>
</html>