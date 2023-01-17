<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <form action="./formulario3.php" method="POST">
        <div class="formulario">
            Nombre: <input type="text" name="nombre" id="nombre">
            Email: <input type="text" name="mail" id="mail">
            <br>
            Mensaje:
            <br>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </div>
    </form>

    <?php
    include 'sanear.php';

    if (isset($_REQUEST['enviar'])) {
        $nombre = sanear("nombre");
        $destinatario = $_REQUEST['mail'];
        $mensaje = $_REQUEST['mensaje'];
        $asunto = "Mensaje de prueba ejercicio 3";
        $errores = [];
        if (empty($nombre)) {
            $errores = "El nombre es obligatorio";
        }

        //email ha de ser obligatorio y tener un formato adecuado
        if (!filter_var(($destinatario), FILTER_VALIDATE_EMAIL) || empty($destinatario)) {
            $errores[] = "No se ha indicado email o bien el formato es incorrecto";
        }

        if (empty($errores)) {
            $cuerpo = '
            <html>
            <head>
            <title>Prueba de correo Ejercicio 3</title>
            </head>
            <body>
            <h1>Ejercicio 3 con HTML</h1>
            <p>
            <b>Bienvenidos al terver ejercicio de envio de correo electronico</b>
            Mensaje enviado desde la web: ' . $mensaje . '
            </p>
            </body>
            </html>
            ';

            //indicamos el envio en formato HTML
            $headers = "MIME-Version: 1.0\r\n";

            //añadimos a la cabecera el juego de caracteres que vamos a usar
            $headers .= "Content-type: text/html; charset=utf-8\r\n";

            //añado a la cabecera si no pongo el 8bit puede no coger las ñ, acentos, etc
            $headers .= "Content-Transfer-Encoding: 8bit\r\n";

            //añado a la cabecera la dirección del remitente
            $headers .= "From: <kelvinguerrero2daw\r\n";

            //envio del correo con todos los parámetros configurados

            $ok = mail($destinatario, $asunto, $cuerpo, $headers);

            if ($ok) {
                print 'Correo enviado con exito <br>';
                print '<a href="./formulario3.php">Volver al formulario</a>';
            } else {
                echo "Ha habido algun error al enviar el correo";
            }
        }else{
            echo "Ha habido algun error, rellene los campos de nuevo";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            header("refresh:5;url=formulario3.php");
        }
    }




    ?>
</body>

</html>