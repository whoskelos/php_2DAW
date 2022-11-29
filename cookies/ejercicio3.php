<!-- 3. Realiza un programa php que cambie el color de fondo de una página ente 5
colores que tu elijas dependiendo del resto de la división entre 5 y número de
visitas efectuadas hasta el momento. Los colores estarán metidos en un array. -->
<?php
if (isset($_COOKIE['visitas'])) {
    setcookie("visitas", $_COOKIE['visitas'] + 1, 0);
    $numVisitas = $_COOKIE['visitas'];
    $colores = ['red', 'blue', 'yellow', 'violet', 'green','pink'];
    $indexColorElegido = $numVisitas % 5;
} else {
    setcookie("visitas", 0, 0);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body <?php if (isset($indexColorElegido)) echo "style='background-color:$colores[$indexColorElegido]'" ?>>
    <h1>Cambiar color fondo</h1>
    <?php
        if (isset($_COOKIE['visitas'])) {
            echo "<h2>Color:</h2>";
            echo "<p>$colores[$indexColorElegido]</p>";
        }
    ?>
</body>

</html>