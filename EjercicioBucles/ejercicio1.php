<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>CIRCULOS EN FILA</h1>
    <p>Actualice la pagina para mostrar un nuevo dibujo</p>

    <?php
    $vecesDibujo = rand(1,10);
    echo "<p style='font-size:20px'><b>{$vecesDibujo} circulos<b></p>";
    for ($i=0; $i <= 1; $i++) { 
        echo 
        "<table style='border:2px solid grey;'>
            <tr>";
                for ($i=0; $i < $vecesDibujo ; $i++) { 
                echo "<td style='background-image: url(circulo.svg);width:100px;height:100px;border:2px solid gray'></td>";
                }
            "</tr>
        </table>";
    }

    ?>
</body>
</html>