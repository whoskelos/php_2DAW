<?php
include 'sanear.php';

if (isset($_REQUEST['enviar'])) {
    $nombre = sanear("nombre");
    $destinatario = $_REQUEST['mail'];
    $descripcion = $_REQUEST['mensaje'];

    $errores = [];

    if (isset($_REQUEST["enviar"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        //nombre obligatorio
        if (empty($nombre)) {
            $errores[] = "El nombre es obligatorio";
        }
        //email es obligatorio y ha de tener formato adecuado
        if (!filter_var(($destinatario), FILTER_VALIDATE_EMAIL) || empty($destinatario)) {
            $errores[] = "No se ha indicado email o bien el formato es incorrecto";
        }

        if (empty($errores)) {
            $para = $destinatario;
            $asunto = 'Mensaje prueba ejercicio 2';
            $de = 'from: kelvinguerrero2daw@gmail.com';
            if (mail($para, $asunto, $descripcion, $de)) {
                echo "Correo enviado satisfactoriamente por función mail DE PHP ver";
                print '<a href="./formulario2 .php">Volver al formulario</a>';
            } else {
                echo "Correo enviado ha tenido problemas";
            }
        }else{
            echo "Ha habido algun error, rellene los datos de nuevo";
            foreach ($errores as $error) {
                echo "<li> $error </li>";
            }
            header("refresh:5;url=formulario2.php");
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
        <title>Ejercicio 2 Formulario</title>
    </head>

    <body>
        <form action="./formulario2.php" method="POST">
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
    </body>

    </html>
<?php
}
?>