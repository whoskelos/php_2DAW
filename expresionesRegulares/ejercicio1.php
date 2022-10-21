<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style>
        body {
            background-color: rgb(224, 212, 245);
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Validacion de entrada de texto 1 (resultado)</h1>
    <?php
    $cadena = $_REQUEST["texto"];
    $patron = "/^[a-z]+$/";
    $soloUnaPalabra = "/^[a-z]+$/";
    $dosPalabras = "/^[a-z]+ [a-z]+$/";
    $esp = "/^[a-z]+[(çñáéíóúäëïöüâêîôû)]+[a-z]+$/";
    $patron5 = "/^[a]+[e]+[i]+[o]+[u]+$/";
    $patron6 = "/^[\d]+$/";
    $patron7 = "/^\d*[02468]$/";
    $patron8 = "/^(6|9)[ -]*([0-9][ -]*){8}/";
    $patron9 = "/^[0-9]{8}[ -]*[A-Z]?$/";
    $patron10 = "/^(0|1|2|3|4){5}$/";

    echo "<p>Ha escrito: <b>$cadena</b></p>";

    if ($cadena == "") {
        echo "1.La cadena $cadena está vacía";
    }else {
        echo "1. $cadena no esta vacia";
    }
    if (preg_match($soloUnaPalabra,$cadena)) {
        echo "<br>2. $cadena Son solo letras y una palabra";
    }else {
        echo "<br>2. no es una unica palabra";
    }
    if (preg_match($dosPalabras,$cadena)) {
        echo "<br>3. $cadena son solo letras pero dos palabras";
    }else {
        echo "<br>3. $cadena no son dos palabras";
    }
    if (preg_match($esp,$cadena)) {
        echo "<br>4. $cadena tiene caracteres no ingleses";
    }else {
        echo "<br>4. $cadena son caracteres ingleses";
    }
    if (preg_match($patron5,$cadena)) {
        echo "<br>5. $cadena es una cadena de vocales minusculas sin
        acentuar en orden alfabetico";
    }else {
        echo "<br>5. $cadena NO es una cadena de vocales minusculas sin
        acentuar en orden alfabetico";
    }
    if (preg_match($patron6,$cadena)) {
        echo "<br>6. $cadena es tan solo un numero";
    }else {
        echo "<br>6. $cadena es mas de un numero";
    }
    if (preg_match($patron7,$cadena)) {
        echo "<br>7. $cadena es un numero par";
    }else{
        echo "<br>7. $cadena <b>NO</b> es un numero par";
    }
    if (preg_match($patron8,$cadena)) {
        echo "<br>8. $cadena Es un numero de telefono de 9 cifras que empieza por 6 o 9";
    }else {
        echo "<br>8. $cadena <b>NO</b> es un numero de telefono de 9 cifras que empieza por 6 o 9";
    }
    if (preg_match($patron9,$cadena)) {
        echo "<br>9. $cadena es un numero del DNI (de 1 a 8 numeros, con letra inglesa al final mayuscula o sin ella)";
    }else {
        echo "<br>9. $cadena <b>NO</b> es un numero del DNI (de 1 a 8 numeros, con letra inglesa al final mayuscula o sin ella)";
    }
    if (preg_match($patron10,$cadena)) {
        echo "<br>10. $cadena es un codigo postal";
    }else {
        echo "<br>10. $cadena <b>NO</b> es un codigo postal";
    }

    echo "<p><a href='./ejercicio1.html'>Volver al formulario</a></p>";
    ?>
</body>
</html>