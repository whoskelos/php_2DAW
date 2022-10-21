<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body{
            background-color: #f6f6ff;
        }
        </style>
</head>
<body>
    <h2>ÍNDICE DE MASA CORPORTAL (FORMULARIO BÁSICO)</h2>
    
    <form action="./calculadoraIMC.php" method="post">
        <table>
            <tr>
                <td>Peso:</td>
                <td><input type="number" name="kilos" id="kg">kg</td>
            </tr>
            <tr>
                <td>Altura:</td>
                <td><input type="number" name="altura" id="cm">cm</td>
            </tr>
            <tr>
                <td><input type="submit" value="Calcular" name="btnCalcular"></td>
                <td><input type="reset" value="Borrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>