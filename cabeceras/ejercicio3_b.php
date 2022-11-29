<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
        body {
            background: #8EC5D4;
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }

        .error {
            color: red;
            font-weight: bold;
            font-size: 20px;
        }

        .success {
            color: green;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

<body>

</body>
<?php
if (isset($_POST["enviar"])) {
    if (isset($_POST["txtNombre"]) && $_POST["txtNombre"]) {
        $patronNombre = "/^[aA-zZ]+$/";
        $txtNombre = $_POST["txtNombre"];
        if (preg_match($patronNombre, $txtNombre)) {
            echo "<h1>Formulario-2</h1>";
            echo "<p>Su nombre es <span class='success'>$txtNombre</span></p>";
            echo "<p><a href='./ejercicio3_a.php'>Volver al formulario</a></p>";
        } else {
            header("Location: ./ejercicio3_a.php?error=1");
        }
    } else {
        header("Location: ./ejercicio3_a.php?error=2");
    }
}
?>

</html>