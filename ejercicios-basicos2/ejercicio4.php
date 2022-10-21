<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EJERCICIO 4</title>
</head>
<body>
    <?php
    $color1 = rand(64,255);
    $color2 = rand(64,255);
    $color3 = rand(64,255);
    ?>
    <?php
    print "<svg width='400' height='400' style='border: 1px solid black;'>
    <circle cx='150' cy='180' r='80' style='fill:rgba($color1,0,0,1)'/>
    <circle cx='250' cy='180' r='80' style='fill:rgba(0,$color2,0,0.8)'/>
    <circle cx='200' cy='260' r='80' style='fill:rgba(0,0,$color3,0.8)'/>
</svg>" 
    ?>
    
</body>
</html>