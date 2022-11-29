<?php
setcookie("prueba","funciona",0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericio 1</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_COOKIE['prueba'])) {
        echo "<h2>Funcionan las cookies</h2>";
    }
    ?>
</body>
</html>