<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        body{
            font-family: sans-serif;
        }
        p{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Paises y sus capitales</h1>
    <h3></h3>
    <?php
        $paises = ["Italia" => "Roma","Belgica" => "Bruselas", "Francia" => "Paris", "España" => "Madrid"];

        foreach ($paises as $pais => $capital) {
            echo "<p>La capital de $pais es $capital </p>";
        }
    ?>

</body>
</html>