<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ecuación de segundo grado (Formularios)</h1>
    <p>Dada la ecuación <b>a.x^2 + b.x + c = 0</b>, escriba los valores de los 3 coeficientes y resolveré la ecuación</p>

    <form action="calEcuacion.php" method="post">
        <table>
            <tr>
                <td>A:</td>
                <td><input type="number" name="a" id="a"></td>
        </tr>
        <tr>
                <td>B:</td>
                <td><input type="number" name="b" id="b"></td>
        </tr>
        <tr>
                <td>C:</td>
                <td><input type="number" name="c" id="c"></td>
        </tr>
        </table>
        <tr>
            <td><input type="submit" value="Enviar" name="enviar"></td>
        </tr>
    </form>

</body>
</html>