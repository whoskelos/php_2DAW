<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        body {
            font-family: sans-serif;
            background: aquamarine;
        }

        h1 {
            text-align: center;
        }

        .error {
            color: red;
        }
    </style>
</head>
<?php
if (isset($_POST['enviar'])) {
    $errores = [];
    if (isset($_REQUEST['bgColor'])) {
        $bgColor = $_REQUEST['bgColor'];
    } else {
        $errores[] = "No ha escogido color de fondo";
    }

    if (isset($_REQUEST['color'])) {
        $color = $_REQUEST['color'];
    } else {
        $errores[] = "No ha escogido color de letra";
    }
}
?>

<body <?php if (isset($bgColor) && isset($color)) echo "style='background:$bgColor;color:$color'" ?>>
    <h1>Colores</h1>
    <p><strong>Elija los colores a cambiar:</strong></p>
    <form action="" method="post">
        <table>
            <tr>
                <td>Color de fondo de la página:</td>
                <td><input type="color" name="bgColor"></td>
            </tr>
            <tr>
                <td>Color de la letra de la página:</td>
                <td><input type="color" name="color"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Borrar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>