<?php 
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $password = $_POST['passwd'];
    $est = $_POST['estudios'];
    if (isset($_POST['nacion'])) {
        $nac = $_POST['nacion'];
    }
    if (isset($_POST['idioma'])) {
        $idiomas = $_POST['idioma'];
    }
    $url = $_POST['dirWeb'];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Ejercicio 2</title>
</head>

<body>
    <header class="header">
        <h1>Formulario</h1>
    </header>
    <main class="main">
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <table>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="nombre"></td>
                        <td>Contraseña:</td>
                        <td><input type="password" name="passwd"></td>
                    </tr>
                    <tr>
                        <td>Educación:</td>
                        <td>
                            <select name="estudios">
                                <option value="Sin estudios">Sin estudios</option>
                                <option value="ESO">ESO</option>
                                <option value="Bachillerato">Bachillerato</option>
                                <option value="FP">FP</option>
                                <option value="Universitarios">Universitarios</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </td>
                        <td>Nacionalidad:</td>
                        <td>
                            <input type="radio" name="nacion" value="Hispana">Hispana <br>
                            <input type="radio" name="nacion" value="Sajona">Sajona <br>
                            <input type="radio" name="nacion" value="Otras">Otras <br>
                        </td>
                    </tr>
                    <tr>
                        <td>Idiomas:</td>
                        <td>
                            <input type="checkbox" name="idioma[]" value="Inglés">Inglés <br>
                            <input type="checkbox" name="idioma[]" value="Castellano">Castellano <br>
                            <input type="checkbox" name="idioma[]" value="Francés">Francés <br>
                            <input type="checkbox" name="idioma[]" value="Alemán">Alemán <br>
                        </td>
                    </tr>
                    <tr>
                        <td>URL:</td>
                        <td><input type="text" name="dirWeb"></td>
                    </tr>
                </table>
                <input class="buttons" type="submit" value="Enviar" name="enviar">
                <input class="buttons" type="reset" value="Limpiar">
            </form>
            <?php include("validar-form-2.php"); ?>
        </div>
    </main>
</body>
</html>