<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Dias de la semana</h1>
    <div class="contenedor">
        <?php
            $diasSemana = ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];

            echo "<h3>Bucle for each</h3>";

            foreach ($diasSemana as $indice => $value) {
                echo "<p>$indice => $value</p>";
            }

            echo "<h3>Bucle for</h3>";

            for ($i=0; $i < count($diasSemana); $i++) { 
                echo "<p>$i => $diasSemana[$i]</p>";
            }

        ?>
    </div>
</body>
</html>