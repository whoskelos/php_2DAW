<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h3>Pantalla 1</h3>
    <p>Introduzca un caracter</p>
    <form action="" method="post">
        <table>
            <tr>
                <td>Carácter</td>
                <td><input type="text" name="char" maxlength="1"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Borrar">
                </td>
            </tr>
        </table>
    </form>
    <?php
    // 3. Elabore un programa que pasando un carácter a traves de un formulario, se determine si es:
    //     1. una letra mayúscula
    //     2. una letra minúscula
    //      3. un carácter numérico
    //      4. un blanco
    //     5. un caráceter de puntuación (. o ,)
    //     6. cualquier otra cosa

    if (isset($_POST['enviar'])) {
        echo "<h3>Pantalla 2</h3>";
        echo "<hr>";
        if (isset($_POST['char']) && $_POST['char'] != "") {
            $char = $_POST['char'];
            comprobarCaracter($char);
        }
    }

    function comprobarCaracter($char)
    {
        if ($char === strtoupper($char) && !is_numeric($char)) {
            echo "<p>La letra $char es mayúscula </p>";
        } elseif ($char === strtolower($char) && !is_numeric($char)) {
            echo "<p>El carácter $char es minúsucula </p>";
        } elseif (is_numeric($char)) {
            echo "<p>El carácter $char es numérico</p>";
        } elseif ($char === "") {
            echo "<p>El carácter escrito es un blanco</p>";
        } elseif ($char == "." || $char == ",") {
            echo "<p>El carácter $char es un signo de puntuación</p>";
        }
    }
    ?>
</body>

</html>