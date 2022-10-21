<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <style>
        body {
            font-family: sans-serif;
            background: #D8C8FA;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Matrices 2 (Formulario)</h1>
    <p>Indique el rango de numeros de valores y el rango de los valores y mostraré un numero aleatorio de valores en los rangos indicados</p>

    <form action="ordenaMatrices.php" method="post">
        <table>
            <tr>
                <td>Número mínimo de valores</td>
                <td><input type="number" name="minVal" id=""></td>
            </tr>
            <tr>
                <td>Número máximo de valores</td>
                <td><input type="number" name="maxVal" id=""></td>
            </tr>
            <tr>
                <td>Valor mínimo</td>
                <td><input type="number" name="valMin" id=""></td>
            </tr>
            <tr>
                <td>Valor máximo</td>
                <td><input type="number" name="valMax" id=""></td>
            </tr>
            <tr>
                <td>Ordenar por orden...</td>
                <td>
                    <input type="radio" name="orden" value="directo">Directo
                    <input type="radio" name="orden" value="inverso">Inverso
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Mostrar" name="enviar">
                    <input type="reset" value="Borrar">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST["enviar"])) {
        if (isset($_POST['orden']) && !empty($_POST['orden'])) {
            $minVal = $_REQUEST['minVal'];
            $maxVal = $_REQUEST['maxVal'];
            $valMin = $_REQUEST['valMin'];
            $valMax = $_REQUEST['valMax'];
            $tipoOrden = $_POST['orden'];

            $numArrays = rand($minVal, $maxVal);

            $matriz = [];


            echo "<h3>Datos iniciales</h3>";
            echo "<p>Número de valores en la matriz: $numArrays</p>";
            echo "<p>Valores elegidos al azar entre $valMin y $valMax</p>";

            echo "<h3>Matriz de valores</h3>";

            for ($i = 0; $i < $numArrays; $i++) {
                $numValores = rand($valMin, $valMax);
                array_push($matriz, $numValores);
            }
            print "<pre>\n";
            print_r($matriz);
            print "</pre>\n";

            if ($tipoOrden == "directo") {
                echo "<h3>Matriz de valores ordenada de forma: $tipoOrden</h3>";
                // $matrizOrdenadaDir = asort($matriz);
                // print "<pre>\n";
                // print_r($matrizOrdenadaDir);
                // print "</pre>\n";
            } elseif ($tipoOrden == "invserso") {
                echo "<h3>Matriz de valores ordenada de forma: $tipoOrden</h3>";
            }
        } else {
            $minVal = $_REQUEST['minVal'];
            $maxVal = $_REQUEST['maxVal'];
            $valMin = $_REQUEST['valMin'];
            $valMax = $_REQUEST['valMax'];

            $numArrays = rand($minVal, $maxVal);

            $matriz = [];

            echo "<h3>Datos iniciales</h3>";
            echo "<p>Número de valores en la matriz: $numArrays</p>";
            echo "<p>Valores elegidos al azar entre $valMin y $valMax</p>";

            echo "<h3>Matriz de valores</h3>";

            for ($i = 0; $i < $numArrays; $i++) {
                $numValores = rand($valMin, $valMax);
                array_push($matriz, $numValores);
            }
            print "<pre>\n";
            print_r($matriz);
            print "</pre>\n";
            echo "<h3>Matriz ordenada de valores</h3>";
            echo "<p>No se ha solicitado ordenar la matriz</p>";
        }
    }
    ?>
</body>

</html>