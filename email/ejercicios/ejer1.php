<?php
include 'sanear.php';
if (isset($_REQUEST["enviar"])) {
    $nombre = sanear("nombre");
    $apes = sanear("apellidos");
    $destinatario = sanear("para");
    $asunto = sanear("asunto");

    $errores = [];

    if (isset($_REQUEST["enviar"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        //nombre obligatorios
        if (empty($nombre)) {
            $errores[] = "El nombre es obligatorio";
        }
        //apellidos obligatorios
        if (empty($apes)) {
            $errores[] = "Los apellidos son obligatorios";
        }

        //email es obligatorio y ha de tener formato adecuado
        if (!filter_var(($destinatario), FILTER_VALIDATE_EMAIL) || empty($destinatario)) {
            $errores[] = "No se ha indicado email o bien el formato es incorrecto";
        }

        //asunto no esté vacío
        if (empty($asunto)) {
            $errores[] = "El asunto no puede estar vacío";
        }
        if (empty($errores)) {
            $cuerpo = '
            <html>
			<head>
			<title>Prueba de correo</title>
			</head>
			<body>
			<h1>Ejercicio 1 con HTML</h1>
			<p>
			<b>Bienvenidos al segundo ejemplo de envio de correo electrónico </b>.
			donde convive el texto plano y el de html.<br> '.$_REQUEST["descripcion"] .'
			</p>
			</body>
			</html>
            ';

            //indico el envío en formato HTML

            $headers = "MIME-Version: 1.0\r\n";

            //añadp a la cabecer el juego de caracteres que voy a usar

            $headers .= "Content-type: text/html; charset=utf-8\r\n";

            //añado a la cabecera si no pongo el 8bit puede no coger las ñ, acentos, etc

            $headers .= "Content-Transfer-Encoding: 8bit\r\n";

            //añado a la cabecera la dirección del remitente

            $headers .= "From: <kelvinguerrero2daw\r\n";


            //envio del correo con todos los parámetros configurados

            $ok = mail($destinatario, $asunto, $cuerpo, $headers);

            if ($ok) {
                print 'correo enviado con exito <br>';
                print '<a href="./formulario.php">Volver al formulario</a>';
            } else {
                print 'correo No enviado con exito';
            }
        } else {
            foreach ($errores as $error) {
                echo "<li> $error </li>";
            }
        }
    }
} else {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enviar Mail</title>
    </head>

    <body>
        <div class="formulario">
            <form action="./ejer1.php" method="POST">
                Nombre: <br>
                <input type="text" name="nombre">
                <br>
                Apellidos: <br>
                <input type="text" name="apellidos">
                <br>
                Email: <br>
                <input type="mail" name="para">
                <br>
                Asunto: <br>
                <input type="text" name="asunto">
                <br>
                Mensaje: <br>
                <textarea name="descripcion" id="mensaje" cols="30" rows="10"></textarea>
                <br>
                <input type="submit" value="Enviar" name="enviar">
            </form>
        </div>
    </body>

    </html>
<?php
}
?>