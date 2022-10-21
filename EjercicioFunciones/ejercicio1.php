<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h3>Pantalla 1</h3>
    <form action="" method="post">
        <table>
            <tr>
                <td>N</td>
                <td><input type="number" name="num"></td>
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
    // Escriba una función que nos diga si un valor entero es o no número primo.
    // Los números primos son aquellos que solo son divisibles entre ellos mismos y el 1, es decir, que
    // si intentamos dividirlos por cualquier otro número, el resultado no es entero.
    if (isset($_POST['enviar'])) {
        if (isset($_POST['num']) && $_POST['num'] != "") {
            $num = $_POST['num'];
            if ($num % $num == 0 && $num % 1 == 0) {
                echo "<p>El número:  $num es primo</p>";
            } else {
                echo "<p>El número: $num <b style:'color:red;'> NO</b>es primo</p>";
            }
        } else {
            echo "<p>Escriba un número para comprobar si es primo</p>";
        }
    }
    ?>
</body>

</html>