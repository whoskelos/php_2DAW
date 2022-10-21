<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: rgb(224, 212, 245);
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }
        input {
            width: 95%;
        }
        .texto{
            margin-left: 15px;
        }
        .botones{
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <h1>Validacion de entrada de texto 2 (Resultado)</h1>
    <?php
    $cadena = $_REQUEST["texto"];
    echo "<p>Ha escrito: <b>$cadena</b></p>";

    $patron1 = "/^([a-z][ ]){1,}+$/";
    $patron2 = "/^([a-z][ ]){2,}+$/";
    $patron3 = "/^([a-z]+[ ]{1,}[a-z]+)+$/";
    $patron4 = "/^([A-Z]+){1}$/";
    $patron5 = "/^[0-9]{2}[\/][0-9]{2}[\/][0-9]{4}$/";
    $patron6 = "/^(\d+)(.?)(\d*)$/"; //preguntar a la profe
    $patron7 = "/^(\d+)(.?)(\d*)$/"; //preguntar a la profe
    $patron8 = "/^([A-Z]+(\d)+(\*\+\.\-\_)+)+$/"; // preguntar a la profe

    if (preg_match($patron1,$cadena)) {
        echo "1. La cadena $cadena son uno o más caracteres
        sueltos separados por esapacios";
    }else {
        echo "1. La cadena $cadena <b>NO</b> son uno o más caracteres
        sueltos separados por esapacios";
    }
    if (preg_match($patron2,$cadena)) {
        echo "<br>2. La cadena $cadena son dos o más caracteres
        sueltos separados por esapacios";
    }else {
        echo "<br>2. La cadena $cadena <b>NO</b> son dos o más caracteres
        sueltos separados por esapacios";
    }
    if (preg_match($patron3,$cadena)) {
        echo "<br>3. La cadena $cadena es una o más palabras con
        caracteres ingleses";
    }else {
        echo "<br>3. La cadena $cadena <b>NO</b> es una o más palabras con
        caracteres ingleses";
    }
    if (preg_match($patron4,$cadena)) {
        echo "<br>4. La cadena $cadena es una unica palabra en mayuscula";
    }else {
        echo "<br>4. La cadena $cadena <b>NO</b> es una unica palabra en mayuscula";
    }
    if (preg_match($patron5,$cadena)) {
        echo "<br>5. La cadena $cadena es una fecha con el
        formato dd/mm/aaaa";
    } else {
        echo "<br>5. La cadena $cadena <b>NO</b> es una fecha
        con el formato dd/mm/aaaa";
    }
    if (preg_match($patron6,$cadena)) {
        echo "<br>6. La cadena $cadena es un numero sin signo y puede
        que hasta dos decimales";
    } else {
        echo "<br>6. La cadena $cadena <b>NO</b> es un numero sin signo y puede
        que hasta dos decimales";
    }
    if (preg_match($patron7,$cadena)) {
        echo "<br>7. La cadena $cadena es un numero sin signo y puede
        que hasta dos decimales";
    } else {
        echo "<br>7. La cadena $cadena <b>NO</b> es un numero sin signo y puede
        que parte decimal";
    }
    if (preg_match($patron8,$cadena)) {
        echo "<br>8. La cadena $cadena es una contrasena";
    } else {
        echo "<br>8. La cadena $cadena <b>NO</b> es una contrasena";
    }
    
    
    ?>
</body>
</html>