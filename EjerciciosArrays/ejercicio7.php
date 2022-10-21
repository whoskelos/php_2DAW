<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <style>
        body{
            font-family: sans-serif;
            background: aqua;
        }
        body h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>LETRA DNI BÁSICO (FORMULARIO)</h1>
    <form action="./calLetraDNI.php" method="post">
        <table>
            <tr>
                <td>Introduce tu DNI:</td>
                <td><input type="text" name="dni"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Encuentra letra" name="enviar">
                    <input type="reset" value="Restablecer">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>