<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Programa que cambie el orden de las filas</h1>
    <form action="cambiarOrden.php" method="post">
        <table>
            <tr>
                <td>Filas</td>
                <td><input type="number" name="nFilas"></td>
            </tr>
            <tr>
                <td>Columnas</td>
                <td><input type="number" name="nColumnas"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php

    ?>
</body>

</html>