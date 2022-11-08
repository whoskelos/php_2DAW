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
        body{
            font-family: sans-serif;
        }
        h1{
            text-align: center;
        }
        .exito{
            color: green;
            font-weight: bold;
        }
        .error{
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

    function leerFichero(){
        $file = "/subida-ficheros/ejercicio3.php";
        if ($fp = fopen($file,"r")) {
            $contenido = fread($fp,filesize($file));
            escribirFichero($contenido);
            fclose($file);
        }else {
            fclose($file);
            return false;
        }
    }

    function escribirFichero($fich){
        $idTiempo = time();
        $nombreFicheroNuevo = "archivo-".$idTiempo;
        $fich_creado = fopen($nombreFicheroNuevo,"w");
        if (fwrite($fich_creado,$fich)) {
            fclose($fich_creado);
        }
        else {
            fclose($fich_creado);
            return false;
        }
            
    }
}
?>
</body>
</html>