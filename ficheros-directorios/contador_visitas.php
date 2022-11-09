<!-- 2. Realiza un contador de visitas que sumará 1 cada vez que alguien cargue la
página. Para ello necesitamos crear un archivo de texto vacío llamado
"contador.txt" en el que se escribirá de forma manual un 0. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        body {
            font-family: sans-serif;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Contador de visitas</h1>
    <h3>Recargue la pagina para contar la visita</h3>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <fieldset>
            <legend>Contador</legend>
            <input type="submit" value="Recargar" name="enviar">
        </fieldset>
    </form>

    <?php
        if (isset($_POST['enviar'])) {
            //abrimos fichero
            $fichero = fopen("contador.txt","r");
            //variable contador = 0
            $cont = fgets($fichero); //leemos el fichero
            fclose($fichero); //Cerramos lecutra del fichero
            $cont++; //aumentamos el valor de $cont del fichero
            //abrimos fichero
            $fichero = fopen("contador.txt","w"); 
            //escribimos en el fichero el nuevo valor
            if(fwrite($fichero,$cont)) {
                echo "<p><strong>Contador:</strong> $cont</p>";
                fclose($fichero);
            }
        }
    ?>
</body>
</html>