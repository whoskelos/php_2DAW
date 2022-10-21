<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <h1>Tres círculos</h1>
    <?php
    $radio1 = rand(50, 150);
    $radio2 = rand(50, 150);
    $radio3 = rand(50, 150);

    echo "<svg class='dado' width='700' height='300' style='border:2px solid black;'>
    <circle cx='$radio1' cy='150' r='$radio1' style='fill:red;stroke:black;stroke-width:2px'/>
    <circle cx='" . ($radio1 * 2 + $radio2) . "'cy='150' r='$radio2' style='fill:green;stroke:black;stroke-width:2px'/>
    <circle cx='" . ($radio1 * 2 + $radio2 * 2 + $radio3) . "'cy='150' r='$radio3' style='fill:blue;stroke:black;stroke-width:2px'/>
    </svg>";
    ?>
</body>

</html>