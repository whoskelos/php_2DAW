<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
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
    <h1>Ejercicio 2</h1>
    <form action="./ejercicio2_b.php" method="GET">
    <table>
        <tr>
            <td>
                <label for="txtPass">Introduzca una clave</label>
            </td>
            <td>
                <input type="text" name="txtPass" id="txtPass">
            </td>
        </tr>
    </table>
    <input type="submit" value="Confirmar" name="enviar">
    </form>
    <?php
        if (isset($_GET['error']) && $_GET['error'] == "1") {
            echo "<p class='error'>La clave es incorrecta</p>";
        }
        if (isset($_GET['error']) && $_GET['error'] == "2") {
            echo "<p class='error'>Campo clave vacio</p>";
        }
    ?>
</body>
</html>