<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
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
    </style>
</head>

<body>
    <?php
    if (isset($_GET['enviar'])) {
        if (isset($_GET['txtPass']) && $_GET['txtPass'] != "") {
            $passwd = $_GET['txtPass'];
            if ($passwd == "z80") {
                echo "<h1>Bienvenido su clave era la requerida</h1>";
            } else {
                header("Location: ./ejercicio2_a.php?error=1");
            }
        }else {
            header("Location: ./ejercicio2_a.php?error=2");
        }
    }
    ?>
</body>

</html>