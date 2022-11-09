<!-- 1. Realice una página llamada lectura.php en la que lea el contenido de una de las
páginas web hechas hasta ahora, lo guarde a un fichero local llamado
fich_salida.txt y escriba el número total de bytes escritos. -->
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
        }

        h1 {
            text-align: center;
        }

        .exito {
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <p>1. Realice una página llamada lectura.php en la que lea el contenido de una de las
        páginas web hechas hasta ahora, lo guarde a un fichero local llamado
        fich_salida.txt y escriba el número total de bytes escritos.</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <fieldset>
            <legend>Ficheros</legend>
            <p><strong>Pulse para realizar el ejercicio</strong></p>
            <input type="submit" value="Leer fichero" name="enviar">
        </fieldset>
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        //lectura del fichero
        $file = "../sanear-validar/ejercicio3.php"; //fichero que vamos a leer
        if ($fp = fopen($file, "r")) { //apertura del fichero en modo lectura
            $sizeFichero = filesize($file);
            $contenido = fread($fp, filesize($file)); // guardamos el contenido en $contenido del fichero que leemos
            //escritura del fichero
            $fichero = fopen("fich-salida.txt", "w");
            if (fwrite($fichero, $contenido."\r\n Tamano del fichero: $sizeFichero bytes")) {
                echo "<p class='exito'>Fichero creado con exito</p>";
            } else {
                echo "<p class='error'>Error al crear el nuevo fichero</p>";
            }
        } else {
            echo "<p class='error'>Error al leer el fichero</p>";
        }

        fclose($fp);
        fclose($fichero);
    }
    ?>
</body>

</html>