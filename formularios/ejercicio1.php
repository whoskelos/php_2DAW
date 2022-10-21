<?php
if (isset($_POST['enviar'])) {
    include 'sanear.php';
    //expresiones regulares para el nombre y apellidos
    $expresion1 = "/^[a-z]+[\s]+[a-z]+$/i"; //letras mayúsculas y minúsculas

    $errores = [];
    if (isset($_POST['nombre']) && $_POST['nombre'] != "") {
        $nombre = sanear("nombre");
        if (!preg_match($expresion1, $nombre)) {
            $errores[] = "Carácteres no validos introducidos en el nombre";
        }
    } else {
        $errores[] = "Rellene el nombre";
    }

    if (isset($_POST['apellidos']) && $_POST['apellidos'] != "") {
        $apellidos = sanear("apellidos");
        if (!preg_match($expresion1, $apellidos)) {
            $errores[] = "Carácteres no validos introducidos en el apellidos";
        }
    } else {
        $errores[] = "Rellene los apellidos";
    }
    if (empty($errores)) {
        echo "<p>Su nombre es <b>$nombre</b></p>";
        echo "<p>Sus apellidos son <b>$apellidos</b></p>";
        echo "<p style='color:red'><a href='ejercicio1.php'>Volver al formulario</a></p>";
    }else {
        echo "<h1>Errores</h1>";
        foreach ($errores as $key => $value) {
            echo "<ul><li><p style='color:red' class='error'>$value</p></li></ul>";
        }
        echo "<p style='color:red'><a href='ejercicio1.php'>Volver al formulario</a></p>";
    }
} else {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
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

    <body>
        <h1>Datos Personales 2(Formulario)</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Escriba su nombre:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Escriba sus apellidos:</td>
                    <td><input type="text" name="apellidos"></td>
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
<?php
}
?>