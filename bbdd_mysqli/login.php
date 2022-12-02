<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        form {
            border: 1px solid gray;
            padding: 10px;
        }
        form label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Autenticacion</h1>
    <form action="accion-login.php" method="post">
        <table>
            <tr>
                <td><label for="txtUser">Usuario:</label></td>
                <td><input type="text" name="txtUser" id="txtUser"></td>
            </tr>
            <tr>
                <td><label for="txtPass">Password:</label></td>
                <td><input type="password" name="txtPass" id="txtPass"></td>
            </tr>
        </table>
        <input type="submit" value="Iniciar Sesion" name="enviar">
    </form>
    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red;'>Datos incorrectos</p>";
    }
    ?>
</body>
</html>