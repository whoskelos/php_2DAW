<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <style>
        body {
            font-family: sans-serif;
            background: aqua;
        }

        body h1 {
            text-align: center;
        }
        p{
            font-size: 30px;
        }
    </style>
</head>

<body>
    <h1>RESPUESTA (MATRICES Y FORMULARIO BÁSICO)</h1>
    <form action="./calLetraDNI.php" method="post">
        <table>
            <tr>
                <td>Introduce tu DNI:</td>
                <td><input type="number" name="dni"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Encuentra letra" name="enviar">
                    <input type="reset" value="Restablecer">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        if (isset($_POST['dni']) && $_POST['dni'] != "") {
            $dni = $_POST['dni'];
            $arrLetras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
            $resto = $dni % 23;
            echo "<p>La letra del DNI es: $arrLetras[$resto]</p>";
        }
    }
    ?>
</body>

</html>