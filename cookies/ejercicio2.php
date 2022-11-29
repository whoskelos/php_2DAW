<?php

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 2</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h2>Contador</h2>
    <?php
    if (isset($_COOKIE['prueba'])) {
        setcookie("prueba", $_COOKIE['prueba'] + 1, 0);
        echo $_COOKIE['prueba'];
    }else {
        setcookie("prueba",1,0);
    }
    ?>
</body>

</html>