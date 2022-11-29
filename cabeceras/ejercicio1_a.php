<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body {
            background: #8EC5D4;
            font-family: sans-serif;
        }
        h1{
            text-align: center;
        }
        .error {
            color: red;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <form action="./ejercicio1_b.php" method="GET">
    <table>
        <tr>
            <td>Introduzca una direccion web</td>
        </tr>
        <tr>
            <td>
                <label for="txtUrl">(ej: www.google.es)</label>
            </td>
            <td>
                <input type="text" name="txtUrl" id="txtUrl">
            </td>
        </tr>
    </table>
    <input type="submit" value="Redireccionar" name="enviar">
    </form>
    <?php
        if (isset($_GET['error'])) {
            echo "<p class='error'>Error con la URL</p>";
        }
    ?>
</body>
</html>