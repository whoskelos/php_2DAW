<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body {
            background-color: #f6f6ff;
        }
    </style>
</head>

<body>
    <h2>FORMULARIO BÁSICO: CONVERTIDOR DE SEGUNDOS A MINUTOS Y SEGUNDOS</h2>

    <form action="./convertidorSec.php" method="post">
        <table>
            <tr>
                <td>Segundos</td>
                <td><input type="number" name="segundos" id="segundos"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Convertir" name="btnConvertir"></td>
                <td><input type="reset" value="Borrar"></td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['btnConvertir'])) {
        $nSegundos = $_REQUEST['segundos'];
        $minutos = round($nSegundos / 60);
        $segundos = round($nSegundos % 60);

        echo "<p style='font-weight:700;'>$nSegundos segundos son $minutos minutos y $segundos segundos</p>";
    }
    ?>
</body>

</html>