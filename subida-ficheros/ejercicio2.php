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
            background: #95E8FF;
        }

        h1 {
            text-align: center;
        }

        .error {
            color: #ff0000;
        }
    </style>
</head>

<body>
    <h1>Subida de ficheros</h1>
    <h3>Insertar nueva noticia</h3>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="txtTitulo">Titulo:*</label></td>
                <td><input type="text" name="txtTitulo" id="txtTitulo"></td>
            </tr>
            <tr>
                <td><label for="txtTexto">Texto:*</label></td>
                <td><textarea name="txtTexto" id="txtTexto" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><label for="selCategorias">Categoria</label></td>
                <td>
                    <select name="selCategorias" id="selCategorias">
                        <option value="costas">costas</option>
                        <option value="sierra">sierra</option>
                        <option value="desierto">desierto</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="foto">Imagen:</label></td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>
        </table>
        <input type="submit" value="Insertar Noticia" name="enviar">
    </form>
        <?php include("validar-form-2.php") ?>
</body>

</html>