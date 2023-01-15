<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: sans-serif;
    }
    .container {
        margin: 0.8em;
    }

    .container h1 {
        margin: 10px;
    }

    .formulario, .respuesta {
        margin: 10px;
    }

    .cabeceras {
        font-size: 25px;
    }

    .formulario input[type="text"] {
        padding: 5px;
    }

    .formulario button {
        padding: 10px;
        font-weight: 700;
    }

    .err {
        color: red;
    }
</style>

<body>
    <div class="container">
        <h1>Ejercicio 1</h1>
        <div class="formulario">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="nombre">
                    <p class="cabeceras">Nombre:</p>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div class="apellidos">
                    <p class="cabeceras">Apellidos:</p>
                    <input type="text" name="apellidos" id="apellidos">
                </div>
                <div class="email">
                    <p class="cabeceras">email:</p>
                    <input type="text" name="email" id="email">
                </div>
                <div class="asunto">
                    <p class="cabeceras">asunto:</p>
                    <input type="text" name="asunto" id="asunto">
                </div>
                <div class="mensaje">
                    <p class="cabeceras">mensaje:</p>
                    <textarea name="mensaje" id="mensaje" cols="80" rows="10"></textarea>
                </div>
                <button type="submit" name="enviar">Enviar</button>
            </form>
        </div>
        <div class="respuesta">
            <?php
            if (isset($_POST["enviar"])) {
                include 'sanear.php';
                include 'validaciones.php';
                include 'funciones.php';
                $errores = [];
                if (isset($_POST["nombre"]) && $_POST["nombre"] != "") {
                    $nombre = sanear("nombre");
                    if (!letrasEspacios($nombre)) {
                        $errores[] = "Formato nombre no valido";
                    }
                } else {
                    $errores[] = "Campo nombre vacio";
                }

                if (isset($_POST["apellidos"]) && $_POST["apellidos"] != "") {
                    $apellidos = sanear("apellidos");
                    if (!letrasEspacios($apellidos)) {
                        $errores[] = "Formato apellidos no valido";
                    }
                } else {
                    $errores[] = "Campo apellidos vacio";
                }

                if (isset($_POST["email"]) && $_POST["email"] != "") {
                    $email = sanear("email");
                    if (!validaEmail($email)) {
                        $errores[] = "Formato email no valido";
                    }
                } else {
                    $errores[] = "Campo email vacio";
                }

                if (isset($_POST["asunto"]) && $_POST["asunto"] != "") {
                    $asunto = sanear("asunto");
                    if (!letrasEspacios($asunto)) {
                        $errores[] = "Formato asunto no valido";
                    }
                } else {
                    $errores[] = "Campo asunto vacio";
                }

                if (isset($_POST["mensaje"]) && $_POST["mensaje"] != "") {
                    $mensaje = sanear("mensaje");
                    if (!letrasEspacios($mensaje)) {
                        $errores[] = "Formato mensaje no valido";
                    }
                } else {
                    $errores[] = "Campo mensaje vacio";
                } 

                if (empty($errores)) {
                    echo "<table>
                        <tr>
                            <td>Nombre:</td>
                            <td>$nombre</td>
                        </tr>
                        <tr>
                            <td>Apellidos:</td>
                            <td>$apellidos</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>$email</td>
                        </tr>
                        <tr>
                            <td>Asunto:</td>
                            <td>$asunto</td>
                        </tr>
                        <tr>
                            <td>Mensaje:</td>
                            <td>$mensaje</td>
                        </tr>
                    </table>";

                    //llamamos funcion mail
                    sendMail($email,$asunto,$mensaje);

                } else {
                    foreach ($errores as $error ) {
                        echo "<p class='err'>$error</p>";
                    }
                }
            }
            ?>
        </div>
    </div>

</body>

</html>