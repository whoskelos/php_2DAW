<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 Resultado</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            background: #DCFFF8;
        }
        h1{
            text-align: center;
        }
        .container{
            margin: 5px;
            /* border: 1px solid black; */
            padding: 5px;
        }
        .container label{
            font-size: 20px;
        }
        #tlf {
            border: none;
            border-bottom: 1px solid black;
        }
        .boton{
            margin-top: 5px;
        }
        .boton button{
            border: none;
            border-radius: 4px;
            padding: 4px;
            background-color: #2B927E;
            color: white;
        }
        a{
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- <h1>Ejercicio 4</h1>
    <div class="container">
        <form action="">
            <div class="input">
                <label for="tlf">Numero Telefono:</label>
                <input type="text" name="tlf" id="tlf">
            </div>
            <div class="boton">
                <button type="submit">Comprobar</button>
                <button type="reset">Borrar</button>
            </div>
            
        </form>
    </div> -->
    <?php
        $patron = "/^(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}$/"; //validar numero espanya
        $numero = $_REQUEST['tlf'];

        if (preg_match($patron,$numero)) {
            echo "<p>El numero <b>$numero</b> es correcto</p>";
        } else {
            echo "<p>El numero <b>$numero</b> no cumple con los requisitos necesarios</p>";
        }

        echo "<a href='./ejercicio4.html'>Volver a formulario</a>"
        
    ?>
</body>
</html>