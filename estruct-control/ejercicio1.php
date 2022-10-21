<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        .respuesta{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Dos Dados</h1>
    <p>Actualice la página para mostrar una nueva tirada</p>

    <?php
    $dado1 = rand(1,6);
    $dado2 = rand(1,6);

    echo "<img src='img/$dado1.svg'></img>";
    echo "<img src='img/$dado2.svg'></img>";

    if ($dado1 == $dado2) {
        echo "<p class='respuesta'>Ha sacado pareja</p>";
    }elseif($dado1 > $dado2){
        echo "<p class='respuesta'>El dado 1 es mayor que el dado 2</p>";
    }elseif($dado1 < $dado2){
        echo "<p class='respuesta'>El dado 2 es mayor que el dado 1</p>";
    }
    ?>
</body>
</html>