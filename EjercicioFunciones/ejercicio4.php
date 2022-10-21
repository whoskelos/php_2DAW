<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <style>
        input[type="number"i] {
            width: 40px;
        }
    </style>
</head>

<body>
    <h3>Pantalla 1</h3>
    <hr>
    <p>Introduzca los elementos de la matriz:</p>

    <form action="" method="post">
        <table id="tabla">
            <?php
            // Haz un programa que pinte una matriz de 3x3 y una vez guardados una puntuación en cada fila,
            // llama a una función donde se calcule que fila es la que tiene la puntuacion mas alta. 
            for ($i = 0; $i < 3; $i++) {
                echo "<tr>
                    <td><input type='number' name='celda$i'></td>
                    <td><input type='number' name='celda$i'></td>
                    <td><input type='number' name='celda$i'></td>
                </tr>";
            }
            ?>
            <tr>
                <td>
                    <input type="submit" value="Enviar" name="enviar">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        
        
    }
    ?>


</body>

</html>