<!-- 6. Creación de un archivo de información de imágenes de manera que teniendo
imágenes en un directorio de imágenes , cree una página PHP en la cual se
genere un archivo de texto que contenga el nombre y el tamaño de estas
imágenes.
A continuación, copiara estas imágenes en un directorio nuevo que esté al
mismo nivel que el directorio de imágenes. -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
    //abrimos directorio que vamos a leer
    $directorio = opendir("./images");
    //abrimos fichero donde vamos a escribir el nombre y tamano de las imagenes que encontremos
    $fichero = fopen("images.txt", "a+");
    //leemos directorio y vamos escribiendo en el ficherop
    while ($archivo = readdir($directorio)) {
        //condicion para saber que lo que leemos es un archivo y no un directorio
        if (!is_dir($archivo)) {
            fwrite($fichero, "ARCHIVO: $archivo \n\r");
            //comprobamos si el directorio donde vamos a copiar las imagenes existe
            if (is_dir("./copiaImages")) {
                //existe el directorio y copiamos imagen
                $ruta_origen_img = "images/" . $archivo;
                copy($ruta_origen_img, "./copiaImages/".$archivo);
            } else {
                //echo "no existe y creamos directorio y copiamos la primera imagen";
                mkdir("./copiaImages");
                //copiamos
                $ruta_origen_img = "images/" . $archivo;
                copy($ruta_origen_img, "./copiaImages/".$archivo);
            }
        }
    }
    echo "<p><a href='./images.txt'>Archivo lista imagenes</a></p>";
    ?>
</body>

</html>