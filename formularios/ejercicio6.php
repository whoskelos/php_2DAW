<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <style>
        body {
            font-family: sans-serif;
            background: aquamarine;
        }

        h1 {
            text-align: center;
        }

        .error {
            color: red;
        }

        .form fieldset {
            border: 3px solid #CB8CFC;
            background: #E5CBFA;
        }

        .form legend {
            border: 3px solid #CB8CFC;
            background: white;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Datos personales 6</h1>
    <form action="" method="post" class="form">
        <fieldset>
            <legend>Formulario</legend>
            <p>Escriba los datos siguientes:</p>
            <table>
                <tr>
                    <td>
                        <strong>Nombre:</strong><br>
                        <input type="text" name="nombre">
                    </td>
                    <td>
                        <strong>Apellidos:</strong><br>
                        <input type="text" name="apellidos">
                    </td>
                    <td>
                        <strong>Edad:</strong><br>
                        <select name="edades">
                            <option value="..." selected>...</option>
                            <option value="Menos de 20 años">Menos de 20 años</option>
                            <option value="Entre 20 y 39 años">Entre 20 y 39 años</option>
                            <option value="Entre 40 y 59 años">Entre 40 y 59 años</option>
                            <option value="60 años o más">60 años o más</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Peso:</strong><br>
                        <input type="number" name="peso">kg
                    </td>
                    <td>
                        <strong>Sexo:</strong><br>
                        <input type="radio" name="sexo" value="Hombre">Hombre
                        <input type="radio" name="sexo" value="Mujer">Mujer
                    </td>
                    <td>
                        <strong>Estado Civil:</strong><br>
                        <input type="radio" name="estCivil" value="Soltero">Soltero
                        <input type="radio" name="estCivil" value="Casado">Casado
                        <input type="radio" name="estCivil" value="Otro">Otro
                    </td>
                </tr>
                <tr>
                    <td><strong>Aficiones:</strong></td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value="Cine">Cine
                        <input type="checkbox" name="aficiones[]" value="Literatura">Literatura
                        <input type="checkbox" name="aficiones[]" value="Tebeos">Tebeos
                        <br>
                        <input type="checkbox" name="aficiones[]" value="Deporte">Deporte
                        <input type="checkbox" name="aficiones[]" value="Música">Música
                        <input type="checkbox" name="aficiones[]" value="Televisión">Televisión
                    </td>
                </tr>
            </table>
            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="Borrar">
        </fieldset>
    </form>
    <?php 
    if (isset($_POST['enviar'])) {
        include 'sanear.php';
        $errores = [];
        if (isset($_REQUEST['nombre']) && $_REQUEST['nombre'] != "") {
            $nombre = sanear("nombre");
        }else{
            $errores[] = "Nombre vacío";
        }
        if (isset($_REQUEST['apellidos']) && $_REQUEST['apellidos'] != "") {
            $apellidos = sanear("apellidos");
        }else {
            $errores[] = "Apellidos vacíos";
        }
        if (isset($_REQUEST['estCivil']) && $_REQUEST['estCivil'] != "") {
            $estadoCivil = $_REQUEST['estCivil'];
        }else  {
            $errores[] = "Seleccione un estado civil";
        }
        if (isset($_REQUEST['aficiones'])) {
            $aficiones = $_REQUEST['aficiones'];
        }else {
            $errores[] = "No ha seleccionado aficiones";
        }

        if (empty($errores)) {
            echo "<h2>Datos introducidos:</h2>";
            echo "<ol>
                    <li><strong>Nombre: </strong>$nombre</li>
                    <li><strong>Apellidos: </strong>$apellidos</li>
                    <li><strong>Estado Civil: </strong>$estadoCivil</li>
                    <li><strong>Aficiones: </strong><ul>";
            foreach ($aficiones as $key => $value) {
                echo "<li>$value</li>";
            }
            echo "</ul></ol>";
            echo "<button type='button'><a href='ejercicio6.php'>Volver al formulario</a></button>";
        }else{
            echo "<h3>Errores en el formulario</h3>";
            echo "<ul>";
            foreach ($errores as $key => $value) {
                echo "<li class='error'> $value </li>";
            }
            echo "</ul>";
            echo "<button type='button'><a href='ejercicio6.php'>Volver al formulario</a></button>";
        }
    }
    ?>

</body>

</html>