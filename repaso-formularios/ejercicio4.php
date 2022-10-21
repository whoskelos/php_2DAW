<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <p>Escriba la cantidad de dinero (valores entre 0 y 1.000.000) y elija la divisa:</p>
    <form action="exchanger.php" method="post">
        <table>
            <tr>
                <td>Convertir en euros:</td>
                <td><input type="text" name="valor" id="valor"></td>
            </tr>
            <tr>
                <td><input type="radio" name="moneda" id="dolar" value="dolar">Dolares USA</td>
                <td><input type="radio" name="moneda" id="peso" value="peso">Peso</td>
                <td><input type="radio" name="moneda" id="yenes" value="yenes">Yenes</td>
                <td><input type="radio" name="moneda" id="pesetas" value="peseta">Pesetas</td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar" name="enviar"></td>
                <td><input type="reset" value="Borrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>