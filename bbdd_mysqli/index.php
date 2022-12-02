<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Autenticacion</h1>
    <img src="https://www.publicdomainpictures.net/pictures/340000/nahled/fleur-4.png" alt="flor">
    <?php
    session_name("usuarioLogueado");
    session_start();
        if (isset($_SESSION['usuarioLogueado'])) {
            echo "<p>Bienvenido <strong>" . $_SESSION['usuarioLogueado'] . "</strong></p>";
            echo "<a href='cerrarSesion.php'>Cerrar Sesion</a>";    
        }else {
            echo "<p>Sesion cerrada con exito. <a href='login.php'>Volver al login</a></p>";
        }
    ?>
</body>
</html>