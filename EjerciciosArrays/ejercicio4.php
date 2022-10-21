<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head> 
<body>
    <h1 style="text-align: center;">Matrices 1</h1>
    <h3>Datos inciales</h3>

    <?php
    $numArrays = rand(5,15);
    $arrayRam = [];
    
    echo "<p>Número de valores en la matriz: $numArrays</p>";
    echo "<p>Valores elegidos al azar entre 0 y 10</p>";
    
    echo "<h3>Matriz de valores</h3>";
    
    for ($i=0; $i < $numArrays; $i++) { 
        $valArray = rand(0,10);
        array_push($arrayRam,$valArray);
    }
    
    print_r($arrayRam);
    ?>
</body>
</html>