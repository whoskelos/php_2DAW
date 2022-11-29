<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de viajes</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .contenedor {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .titleAgencia {
            text-align: center;
            color: #8470FF;
        }

        #tablaForm input {
            margin: 3px;
        }

        #tablaForm tr td {
            border: 2px solid black;
            background: #FFFFC0;
        }

        #tablaDestinos tr th {
            background: purple;
            padding: 5px;
        }

        #tablaDestinos tr td {
            background: #FFFFC0;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h3 class="titleAgencia">Agencia de viajes</h3>
    <div class="contenedor">
        <table id="tablaDestinos">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>Destino</th>
                    <th>duracion</th>
                    <th>salida</th>
                </tr>
            </thead>
            <?php
            if (isset($_POST['enviar'])) {
                $error = [];
                if (isset($_POST['txtNombreCircuito']) && $_POST['txtNombreCircuito'] != '') {
                    $txtNombreCircuito = $_POST['txtNombreCircuito'];
                } else {
                    $error[] = "Campo vacio nombre circuito";
                }

                if (isset($_POST['txtDestino']) && $_POST['txtDestino'] != '') {
                    $txtDestino = $_POST['txtDestino'];
                } else {
                    $error[] = "Campo vacio destino";
                }

                if (isset($_POST['txtDuracion']) && $_POST['txtDuracion'] != '') {
                    $txtDuracion = $_POST['txtDuracion'];
                } else {
                    $error[] = "Campo vacio duracion";
                }

                if (isset($_POST['txtDias']) && $_POST['txtDias'] != '') {
                    $txtDias = $_POST['txtDias'];
                } else {
                    $error[] = "Campo vacio duracion";
                }
                if (empty($error)) {
                    if (isset($datos)) {
                        $datos .= "<tr>
                        <td>$txtNombreCircuito</td>
                        <td>$txtDestino</td>
                        <td>$txtDuracion</td>
                        <td>$txtDias</td>
                    </tr>";
                    }else {
                        $datos = "<tr>
                        <td>$txtNombreCircuito</td>
                        <td>$txtDestino</td>
                        <td>$txtDuracion</td>
                        <td>$txtDias</td>
                    </tr>"; 
                    }
                    echo $datos;
                }
            }
            ?>
        </table>


        <table id="tablaForm">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <tr>
                    <td><label for="txtNombreCircuito">Introduzca el nombre del circuito</label></td>
                    <td><input type="text" name="txtNombreCircuito" id="txtNombreCircuito"></td>
                </tr>
                <tr>
                    <td><label for="txtDestino">Introduzca el destino</label></td>
                    <td><input type="text" name="txtDestino" id="txtDestino"></td>
                </tr>
                <tr>
                    <td><label for="txtDuracion">Introduzca el duracion</label></td>
                    <td><input type="text" name="txtDuracion" id="txtDuracion"></td>
                </tr>
                <tr>
                    <td><label for="txtDias">Introduzca los dias de salida</label></td>
                    <td><input type="text" name="txtDias" id="txtDias"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Enviar" name="enviar"></td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>