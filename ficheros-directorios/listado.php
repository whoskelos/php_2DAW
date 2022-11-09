<!-- 4. Realice una página llamada listado.php en el que muestre el contenido de un
directorio. Muestre la fecha de la última modificación de cada elemento. En el
caso de que sean archivos muestre además su tamaño en bytes.  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
        <h1>Ejercicio 4</h1>

        <?php 
            //abro directorio
            $directorio = opendir(".");
            echo "<h3>El contenido del directorio ".getcwd()." es:</h3>";
            //recorremos el directorio
            while ($archivo = readdir($directorio)) {
                //Comprobamos si es un directorio o un archivo
                if (is_dir($archivo)) {
                    //esto es un directorio
                    echo "<p>DIRECTORIO: [".$archivo."]</p>";
                } else {
                    //esto son archivos mostramos nombre y tamaño
                    echo "<p>ARCHIVO: $archivo con un tamaño de --> <strong>". filesize($archivo)." bytes</strong></p>";
                }
            }
            closedir($directorio);
        ?>
</body>
</html>