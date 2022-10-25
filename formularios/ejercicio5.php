<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
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
    <h1>Datos personales 5</h1>
    <form action="" method="post" class="form">
        <fieldset>
            <legend>Formulario</legend>
            <p>Indique su edad:</p>
            <table>
                <tr>
                    <td><strong>Edad:</strong></td>
                    <td>
                        <select name="edades">
                            <option value="..." selected>...</option>
                            <option value="Menos de 20 años">Menos de 20 años</option>
                            <option value="Entre 20 y 39 años">Entre 20 y 39 años</option>
                            <option value="Entre 40 y 59 años">Entre 40 y 59 años</option>
                            <option value="60 años o más">60 años o más</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        if (isset($_REQUEST['edades']) && $_REQUEST['edades'] != "...") {
            $edadSeleccionada = $_REQUEST['edades'];
            echo "<p><strong>Edad seleccionada: $edadSeleccionada </strong></p>";
        }else {
            echo "<h3 class='error'>No ha seleccionado edad</h3>";
        }
    }
    ?>
</body>

</html>