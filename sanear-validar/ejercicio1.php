<?php 
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $tlf = $_POST['tlf'];
    $email = $_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <h1>Validación de formularios</h1>
    <p>Escriba los datos siguientes:</p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><input type="text" name="tlf"></td>
            </tr>
            <tr>
                <td>Correo:</td>
                <td><input type="text" name="email"></td>
            </tr>
        </table>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php
    include ("validar-form.php");
    ?>
</body>
</html>