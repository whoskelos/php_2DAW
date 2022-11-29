<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        body {
            background: #8EC5D4;
            font-family: sans-serif;
        }
        h1{
            text-align: center;
        }
        .error {
            color: red;
            font-weight: bold;
            font-size: 20px;
        }
        .success {
            color: green;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Formulario</h1>
    <form action="./ejercicio3_b.php" method="POST">
        <table>
            <tr>
                <td><label for="txtNombre">Nombre: </label></td>
                <td><input type="text" name="txtNombre" id="txtNombre"></td>
                <?php 
                    if (isset($_GET['error']) && $_GET['error'] == "1") {
                        echo "<span class='error'>Formato invalido</span>";
                    }
                    if (isset($_GET['error']) && $_GET['error'] == "2") {
                        echo "<span class='error'>No ha escrito su nombre</span>";
                    }
                    ?>
            </tr>
        </table>
        <input type="submit" value="Comprobar" name="enviar">
        <input type="reset" value="Borrar">
    </form>

</body>
</html>