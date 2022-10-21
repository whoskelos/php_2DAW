<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <style>
        body {
            background: aquamarine;
            font-family: sans-serif;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Estadios de fútbol</h1>
    <?php
    $array = ["Barcelona" => "Camp Nou", "Real Madrid" => "Santiago Bernabeu", "Valencia" => "Mestalla", "Real Sociedad" => "Anoeta"];

    foreach ($array as $equipo => $nombreEstadio) {
        echo "El equipo $equipo tiene el estadio $nombreEstadio <br>";
    }
    ?>
</body>

</html>