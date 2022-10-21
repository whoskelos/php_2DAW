<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>CONTAR PARES E IMPARES</h1>
    <p>Actualice la pagina para mostrar una nueva tirada</p>
    <?php
    $dado = rand(1,6);
    $tirada = rand(1,6);
    $par = 0;
    $impar = 0;
    echo "<p style='font-size:25px;'><b>$tirada dados</b></p>";
    
    echo 
    "<div>
        <div style='display:flex;width:10%;'>";
            for ($i=0; $i < $tirada ; $i++) { 
                echo "<img src=./dados/dado{$dado}.svg style='padding: 5px;'></img>";
                $dado = rand(1,6);
                if ($dado % 2 == 0) {
                    $par++;
                }else {
                    $impar++;
                }
            }
        "</div>
    </div>";
    ?>
    <?php
    echo "<p>Han salido $par numeros pares $impar numeros impares</p>";
    ?>

</body>
</html>