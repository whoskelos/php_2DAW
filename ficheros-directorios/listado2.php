<!-- 5. A continuación modifíquelo (llame a la nueva página listado2.php) para que no
aparezcan los directorios. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
        <h1>Ejercicio 5</h1>

        <?php 
            //abro directorio
            $directorio = opendir(".");
            echo "<h3>El contenido del directorio ".getcwd()." es:</h3>";
            //recorremos el directorio
            while ($archivo = readdir($directorio)) {
                //Comprobamos si es un directorio o un archivo
                if (!is_dir($archivo)) {
                    //esto son archivos mostramos nombre y tamaño
                    echo "<p>ARCHIVO: $archivo con un tamaño de --> <strong>". filesize($archivo)." bytes -> ultima modificacion: ";
                    echo filemtime($archivo) . "</strong></p>";
                }
            }
            closedir($directorio);
        ?>
</body>
</html>