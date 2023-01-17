<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <form action="./formulario4.php" method="POST" enctype="multipart/form-data">
        <div class="formulario">
            Nombre del remitente: <input type="text" name="nombre" id="nombre">
            <br>
            Email destinatario: <input type="text" name="mail" id="mail">
            <br>
            Mensaje:
            <br>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="file" name="archivo" id="archivo">
            <input type="file" name="archivo2" id="archivo2">

            <input type="submit" value="Enviar" name="enviar">
        </div>
    </form>

    <?php
    include 'sanear.php';
    if (isset($_REQUEST['enviar'])) {
        $errores = [];
        $destinatario = $_REQUEST['mail'];
        //nombre obligatorio
        if (empty($_REQUEST['nombre'])) {
            $errores = "El nombre es obligatorio";
        }
        //email obligatorio
        if (!filter_var(($destinatario), FILTER_VALIDATE_EMAIL) || empty($destinatario)) {
            $errores[] = "No se ha indicado email o bien el formato es incorrecto";
        }

        if (empty($errores)) {
            // Indicar cabecera con el nombre del remitente. Si no indicamos la dirección de correo puede que 
            // no se realice el envío a a otros servicios como Hotmail o Yahoo
            $cabecera = "From: <kelvinguerrero2daw@gmail.com>\r\n";

            $datos   = "";
            $mensaje = "";

            // Si se seleccionó un archivo, se adjunta:
            if (empty($_FILES['archivo']['name']) == false) {

                // Creamos una cadena aleatoria, para que tenga valor unico
                //como separador entre cuerpo y archivos adjuntos:
                $separador = md5(uniqid(time()));

                // Comprobamos si el archivo fue subido, y leemos su contenido
                if (is_uploaded_file($_FILES['archivo']['tmp_name'])) {
                    // Leemos el archivo obteniéndolo como una cadena de texto:
                    $fichero = fopen($_FILES['archivo']['tmp_name'], "rb");
                    $datos = fread($fichero, filesize($_FILES['archivo']['tmp_name']));
                    fclose($fichero);

                    // Dividimos la cadena de texto en varias partes más pequeñas:
                    $datos = chunk_split(base64_encode($datos));
                }
                // Comprobamos si el archivo fue subido, y leemos su contenido
                if (is_uploaded_file($_FILES['archivo2']['tmp_name'])) {
                    // Leemos el archivo obteniéndolo como una cadena de texto:
                    $fichero2 = fopen($_FILES['archivo2']['tmp_name'], "rb");
                    $datos2 = fread($fichero2, filesize($_FILES['archivo2']['tmp_name']));
                    fclose($fichero2);

                    // Dividimos la cadena de texto en varias partes más pequeñas:
                    $datos2 = chunk_split(base64_encode($datos2));
                }

                // Creamos la cabecera del mensaje:
                $cabecera .= "MIME-Version: 1.0\r\n" .
                    "Content-Type: multipart/mixed; boundary=\"" . $separador . "\"\r\n\r\n";

                // Construimos el cuerpo del mensaje (para el texto):
                $mensaje = "--" . $separador . "\r\n";
                $mensaje .= "Content-Type:text/plain; charset='iso-8859-1'\r\n";
                $mensaje .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
                $mensaje .= $_POST['mensaje'] . "\r\n\r\n";

                // Continuamos construyendo el cuerpo del mensaje, añadiendo el archivo:
                $mensaje .= "--" . $separador . "\r\n";
                $mensaje .=    "Content-Type: " . $_FILES['archivo']['type'] . "; name='" . $_FILES['archivo']['name'] . "'\r\n";
                $mensaje .= "Content-Transfer-Encoding: base64\r\n";
                $mensaje .= "Content-Disposition: attachment; filename='" . $_FILES['archivo']['name'] . "'\r\n\r\n";
                $mensaje .= $datos . "\r\n\r\n";

                /*
                Si se fuera a insertar otro archivo, tras haber leído el contenido 
				del mismo y haberlo cargado en otra variable, repetiríamos aquí las 
				cinco líneas anteriores (cambiando el nombre del componente del 
				formulario en $_FILES)
                
            */
                // Continuamos construyendo el cuerpo del mensaje, añadiendo el archivo:
                $mensaje .= "--" . $separador . "\r\n";
                $mensaje .=    "Content-Type: " . $_FILES['archivo2']['type'] . "; name='" . $_FILES['archivo2']['name'] . "'\r\n";
                $mensaje .= "Content-Transfer-Encoding: base64\r\n";
                $mensaje .= "Content-Disposition: attachment; filename='" . $_FILES['archivo2']['name'] . "'\r\n\r\n";
                $mensaje .= $datos2 . "\r\n\r\n";

                // Separador de final del mensaje
                $mensaje .= "--" . $separador . "--";
            } else {
                // No se adjuntó ningún archivo, enviamos sólo el texto del mensaje:

                $mensaje = "Mensaje de: " . $_POST['nombre'] . PHP_EOL;
                $mensaje .= "EMail: " . $_POST['mail'] . PHP_EOL;
                $mensaje .= $_POST['mensaje'];
            }
            // IMPORTANTE: debes sustituir la dirección de correo por aquella en que deseas
            //recibir el EMail:
            $ok = mail(trim($_POST['mail']), "Mensaje de prueba", $mensaje, $cabecera);

            if ($ok == true)
                echo "<p>El E-Mail ha sido enviado</p>";
            else
                echo "<p>ERROR al enviar el E-Mail</p>";

            echo "<p>Haz <a href='formulario4.php'>click para volver al formulario</a></p>";
        } else {
            echo "Ha habido algun error";
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
            header("refresh:5;url=formulario4.php");
        }
    }
    ?>
</body>

</html>