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
    <h1>Insercicion de vivienda</h1>
    <p>Introduzca los datos de la vivienda:</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="tipoVivienda">Tipo de vivienda</label></td>
                <td>
                    <select name="tipoVivienda " id="tipoVivienda">
                        <option value="piso">Piso</option>
                        <option value="piso">Chalet</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="zonaVivienda">Zona:</label></td>
                <td><select name="zonaVivienda" id="zonaVivienda">
                        <option value="centro">Centro</option>
                        <option value="periferia">Periferia</option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="dirVivienda">Dirección</label></td>
                <td><input type="text" name="dirVivienda" id="dirVivienda"></td>
            </tr>
            <tr>
                <td><label for="numDormitorios">Número de dormitorios</label></td>
                <td>
                    <input type="radio" name="numDormitorios" id="numDormitorios" value="1">1
                    <input type="radio" name="numDormitorios" id="numDormitorios" value="2">2
                    <input type="radio" name="numDormitorios" id="numDormitorios" value="3">3
                    <input type="radio" name="numDormitorios" id="numDormitorios" value="4">4
                    <input type="radio" name="numDormitorios" id="numDormitorios" value="5">5
                </td>
            </tr>
            <tr>
                <td><label for="precioVivienda">Precio:</label></td>
                <td><input type="text" name="precioVivienda" id="precioVivienda">€</td>
            </tr>
            <tr>
                <td><label for="tamanoVivienda">Tamaño</label></td>
                <td><input type="text" name="tamanoVivienda" id="tamanoVivienda">metros cuadrados</td>
            </tr>
            <tr>
                <td><label for="extras[]">Extras(marque los que procedan):</label></td>
                <td>
                    <input type="checkbox" name="extras[]" id="extras[]" value="piscina">Piscina
                    <input type="checkbox" name="extras[]" id="extras[]" value="jardin">Jardin
                    <input type="checkbox" name="extras[]" id="extras[]" value="Garaje">Garaje
                </td>
            </tr>
            <tr>
                <td><label for="imgVivienda">Foto:</label></td>
                <td><input type="file" name="imgVivienda" id="imgVivienda"></td>
            </tr>
            <tr>
                <td><label for="obsVivienda">Observaciones:</label></td>
                <td><textarea name="obsVivienda" id="obsVivienda" cols="30" rows="10"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Insertar vivienda">
    </form>
</body>

</html>