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
            background: #95E8FF;
        }

        .error {
            color: #ff0000;
        }
    </style>
</head>

<body>
    <h1>Datos Personales</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="txtNombre">Nombre:</label></td>
                <td><input type="text" name="txtNombre" id="txtNombre"></td>

                <td><label for="txtApellidos">Apellidos:</label></td>
                <td><input type="text" name="txtApellidos" id="txtApellidos"></td>
            </tr>
            <tr>
                <td><label for="txtEdad">Edad:</label></td>
                <td><input type="text" name="txtEdad" id="txtEdad"></td>
            </tr>
            <tr>
                <td><label for="txtTlf">Telefono:</label></td>
                <td><input type="text" name="txtTlf" id="txtTlf"></td>
            </tr>
            <tr>
                <td><label for="txtEmail">Email:</label></td>
                <td><input type="text" name="txtEmail" id="txtEmail"></td>
            </tr>
            <tr>
                <td><label for="foto">Foto:</label></td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>
        </table>
        <input type="submit" value="Enviar Consulta" name="enviar">
    </form>
    <?php include("validar-form.php") ?>
</body>

</html>