<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <style>
            body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: rgb(224, 212, 245);
            font-family: sans-serif;
        }

        h1 {
            text-align: center;
        }

        .mal b{
            color: red;
        }
        .bien {
            color: green;
        }
        p{
            font-weight: bold;
            margin-left: 8px;
        }

    </style>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <?php
        $cadena1 = "juanang@alpex.org";
        $cadena2 = "juan.ang@al.pex.com";
        $cadena3 = "JUANANG@pex.com.es";

        $correo = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";

        if (preg_match($correo,$cadena1)) {
            echo "<p class='bien'>LA DIRECCION DE CORREO $cadena1 ES VALIDA</p>";
        } else {
            echo "<p class='mal'>LA DIRECCION DE CORREO $cadena1 <b>NO ES VALIDA</b></p>";
        }

        if (preg_match($correo,$cadena2)) {
            echo "<p class='bien'>LA DIRECCION DE CORREO $cadena2 ES VALIDA</p>";
        } else {
            echo "<p class='mal'>LA DIRECCION DE CORREO $cadena2 <b>NO ES VALIDA</b></p>";
        }

        if (preg_match($correo,$cadena3)) {
            echo "<p class='bien'>LA DIRECCION DE CORREO $cadena3 ES VALIDA</p>";
        } else {
            echo "<p class='mal'>LA DIRECCION DE CORREO $cadena3 <b>NO ES VALIDA</b></p>";
        }
    ?>
</body>
</html>