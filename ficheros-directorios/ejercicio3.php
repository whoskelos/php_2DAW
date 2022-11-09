<!-- 3. Realice una pequeña aplicación para recoger los comentarios de los usuarios
sobre su página web. En una primera página pagina1.php mostrará un
formulario que pida el nombre de usuario y un comentario: -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        body {
            font-family: sans-serif;
        }
        h1{
            color: #33A0FB;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Sugerencias para nuestra página web</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <table>
            <tr>
                <td><label for="txtNombre"><strong>Introduzca su nombre</strong></label></td>
                <td><input type="text" name="txtNombre" id="txtNombre"></td>
            </tr>
            <tr>
                <td><label for="txtComentario"><strong>Comentarios sobre esta página web</strong></label></td>
                <td><textarea name="txtComentario" id="txtComentario" cols="30" rows="10"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Enviar" name="enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        if (isset($_POST['txtNombre']) && $_POST['txtNombre'] != "") {
            $txtNombre = $_POST['txtNombre'];
            if (isset($_POST['txtComentario']) && $_POST['txtComentario'] != "") {
                $txtComentario = $_POST['txtComentario'];
                $fichero = fopen("comentarios.txt","a+");
                if(fwrite($fichero,"----------------------\r\n$txtNombre\r\n$txtComentario\r\n")){
                    echo "<p>Los datos se cargaron con éxito</p>";
                    echo "<p>Pulse <a href='comentarios.txt'>aquí</a>para ver todo el contenido del fichero</p>";
                    fclose($fichero);
                }else {
                    echo "<p class='error'>Error al crear el fichero</p>";
                    fclose($fichero);
                }
            }else{
                echo "<p class='error'>Campo comentario vacio, rellene texto</p>";
            }
        }else{
            echo "<p class='error'>Campo nombre vacio</p>";
        }
    }
    ?>
</body>
</html>