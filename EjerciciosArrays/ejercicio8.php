<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <style>
        body {
            font-family: sans-serif;
            background: aquamarine;
        }

        h1 {
            text-align: center;
        }
        table tr td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Tabla paises</h1>
    <?php
    // $paises = [["nombre => España" ,"lengua => castellano","moneda => peseta"],
    // ["nombre =>Fracia","lengua =>Francés","moneda = franco"],["nombre => Reino Unido","lengua => Ingles", "moneda => Libra"]];

    $españa = ["nombre" => "España", "lengua" => "castellano", "moneda" => "peseta"];
    $francia = ["nombre" => "Francia", "lengua" => "Francés", "moneda" => "franco"];
    $reinoUnido = ["nombre" => "Reino Unido", "lengua" => "Inglés", "moneda" => "libra"];
    $alemania = ["nombre" => "Alemania", "lengua" => "Alemán", "moneda" => "marco"];
    $paises = ["España" => $españa, "Francia" => $francia, "Reino Unido" => $reinoUnido, "Alemania" => $alemania];
    // print "<pre>\n"; print_r($paises); print "</pre>\n";

    echo
    "<table style='border: 1px solid black';>
        <tr>
            <td>Nombre</td>
            <td>Lengua</td>
            <td>Moneda</td>
        </tr>
        <tr>";
    foreach ($españa as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($francia as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($reinoUnido as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($alemania as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    echo "</table>";
    ?>
</body>

</html>