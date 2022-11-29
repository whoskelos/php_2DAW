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
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Creación y destrucción de cookies</h1>
    <p>Elija una opción</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <ul>
            <li>Crear una cookie con una duración de <input type="text" name="txtTiempo"> segundos(entre 1 y 60) <input type="submit" value="Crear" name="crear"></li>
            <li>Comprobar la cookie <input type="submit" value="Comprobar" name="comprobar"></li>
            <li>Destruir la cookie <input type="submit" value="Destruir" name="destruir"></li>
        </ul>
    </form>

    <?php
    //creacion de cookie
    if (isset($_POST['crear'])) {
        if (isset($_POST['txtTiempo']) && $_POST['txtTiempo'] != "") {
            if ($_POST['txtTiempo'] > 0 && $_POST['txtTiempo'] <= 60) {
                $tiempoVida = time() + $_POST['txtTiempo'];
                setcookie("cookie", "ejer_4", $tiempoVida);
            } else {
                echo "<p class='error'>Tiempo introducido no es valido</p>";
            }
        } else {
            echo "<p class='error'>Campo segundos vacío al crear</p>";
        }
    }

    //destruccion cookie
    if (isset($_POST['destruir'])) {
        if (isset($_COOKIE['cookie'])) {
            unset($_COOKIE['cookie']);
        } else {
            echo "<p class='error'>No existe cookie para destruir</p>";
        }
    }
    ?>
</body>

</html>