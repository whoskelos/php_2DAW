<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesiones Aritmeticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $inicial = $_REQUEST ['inicial'];
    $incremento = $_REQUEST ['incremento'];
    $valores = $_REQUEST ['valores'];
    echo
    "<div class='contenedor'>
    <div class='titulo'>
        <h1>Sucesiones aritmeticas 1 (Resultado)</h1>
    </div>
    <div>";
        for ($i=$inicial; $i < $valores ; $i=$incremento+$i) { 
            echo "<p>valor: $i<p></br>";
        }
    "</div>
</div>";
    ?>
</body>

</html>