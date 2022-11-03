<?php
if (isset($_POST['enviar'])) {
    $patronNombreApe = "/^[aA-zZ]+$/";
    $patronEdad = "/^[0-9]{1,3}$/";
    $patronTlf = "/^[6|7]{1}[0-9]{8}/";
    include("sanear.php");

    /**Nombre */
    if (isset($_POST["txtNombre"]) && $_POST["txtNombre"] != "") {
        $txtNombre = sanear("txtNombre");
        if (!preg_match($patronNombreApe, $txtNombre)) {
            echo "<p class='error'>El nombre introducido no es correcto</p>";
        } else {
            echo "<p>El dato introducido: $txtNombre</p>";
        }
    } else {
        echo "<p class='error'>No ha introducido ningun nombre</p>";
    }

    /**Apellidos */
    if (isset($_POST["txtApellidos"]) && $_POST["txtApellidos"] != "") {
        $txtApellidos = sanear("txtApellidos");
        if (!preg_match($patronNombreApe, $txtApellidos)) {
            echo "<p class='error'>El/los apellidos introducido no es correcto</p>";
        } else {
            echo "<p>El dato introducido: $txtApellidos</p>";
        }
    } else {
        echo "<p class='error'>No ha introducido ningun apellido</p>";
    }

    /**Edad */
    if (isset($_POST["txtEdad"]) && $_POST["txtEdad"] != "") {
        $txtEdad = sanear("txtEdad");
        if (!preg_match($patronEdad, $txtEdad)) {
            echo "<p class='error'>La edad introducida no es correcta</p>";
        } else {
            echo "<p>El dato introducido: $txtEdad</p>";
        }
    } else {
        echo "<p class='error'>No ha introducido edad</p>";
    }

    /**Telefono */
    if (isset($_POST["txtTlf"]) && $_POST["txtTlf"] != "") {
        $txtTlf = sanear("txtTlf");
        if (!preg_match($patronTlf, $txtTlf)) {
            echo "<p class='error'>El telefono no es correcto</p>";
        } else {
            echo "<p>El dato introducido: $txtTlf</p>";
        }
    } else {
        echo "<p class='error'>Introduzca un telefono</p>";
    }

    /**Email */
    if (isset($_POST["txtEmail"]) && $_POST["txtEmail"]) {
        $txtEmail = sanear("txtEmail");
        if (!filter_var($txtEmail, FILTER_VALIDATE_EMAIL)) {
            echo "<p class='error'>El email no es correcto</p>";
        } else {
            echo "<p>El dato introuducido: $txtEmail</p>";
        }
    } else {
        echo "<p class='error'>Introduzca un email</p>";
    }

    /**Foto */
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $nombreDirectorio = "imagenes/";
        $nombreFichero = $_FILES['foto']['name'];
        $nombreCompleto = $nombreDirectorio . $nombreFichero;
        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
            $nombreCompleto = $nombreDirectorio . $nombreFichero;
        }
        if (!move_uploaded_file($_FILES['foto']['tmp_name'], $nombreCompleto)) {
            echo "<p class='error'>No se ha podido subir la foto</p>";
        } else {
            echo "<img src='$nombreCompleto' width='300'></img>";
        }
    } else {
        echo "<p class='error'>No ha subido foto</p>";
    }
}
