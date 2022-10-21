<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        body{
            font-family: sans-serif;
        }
        table tr td{
            font-weight: 700;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Tabla de colores</h1>
    <div class="contenedor">
        <?php
        $colores = array(
            "fuertes" => array(
                "rojo" => "#ff0000",
                "verde" => "#00ff00",
                "azul" => "#0000ff"
            ),
            "suaves" => array(
                "rosa" => "#fe9abc",
                "amarillo" => "#fdf189",
                "malva" => "#bc8f8f"
            )
        );

        echo "<table border='1'>";
        foreach ($colores as $tipo => $value) {
            echo "<tr>";
            echo "<td>Colores $tipo</td>";
            foreach ($value as $color => $value) {
                echo "<td style='background-color:$value'>$value => $color</td>";
            }
        }
        echo "</tr></table>";
        
        ?>
    </div>
</body>

</html>