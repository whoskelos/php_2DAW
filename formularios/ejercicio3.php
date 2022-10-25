<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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

        .form fieldset {
            border: 3px solid #CB8CFC;
            background: #E5CBFA;
        }

        .form legend {
            border: 3px solid #CB8CFC;
            background: white;
        }
    </style>
</head>

<body>
    <h1>Datos Personales 4</h1>
    <form action="" method="post" class="form">
        <fieldset>
            <legend>Formulario</legend>
            <p>Indique sus aficiones:</p>
            <table>
                <tr>
                    <td><strong>Aficiones:</strong></td>
                    <td><input type="checkbox" name="aficiones[]" value="Cine">Cine</td>
                    <td><input type="checkbox" name="aficiones[]" value="Literatura">Literatura</td>
                    <td><input type="checkbox" name="aficiones[]" value="Música">Música</td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Enviar" name="enviar">
                        <input type="reset" value="Borrar">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        include 'sanear.php';
        if (isset($_REQUEST['aficiones'])) {
            $aficiones = $_REQUEST['aficiones'];
            echo "<p>Sus aficiones son:</p>";
            foreach ($aficiones as $key => $value) {
                echo "<ul><li>$value</li></ul>";
            }
        } else {
            echo "<h3 class='error'>No ha seleccionado ninguna afición</h3>";
            header("Refresh:1; url=ejercicio3.php");
        }
    }
    ?>
</body>

</html>