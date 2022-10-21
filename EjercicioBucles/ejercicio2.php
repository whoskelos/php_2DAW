<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>CIRCULOS EN FILA</h1>
    <p>Actualice la pagina para mostrar un nuevo dibujo</p>
    <?php
    $vecesDibujo = rand(1,10);
    $r = rand(0,255);
    $g = rand(0,255);
    $b = rand(0,255);
    echo "<p style='font-size:20px'><b>{$vecesDibujo} circulos<b></p>";
    for ($i=0; $i <= 1; $i++) { 
        echo 
        "<table style='border:3px solid grey;'>
            <tr>";
                for ($i=0; $i < $vecesDibujo ; $i++) { 
                echo "<td style='background:rgb($r,$g,$b);width:100px;height:100px;border-radius:50%;'></td>";
                $r = rand(0,255);
                $g = rand(0,255);
                $b = rand(0,255);
                }
            "</tr>
        </table>";
    }
    ?>
</body>
</html>