<?php
if (isset($_POST['enviar'])) {
    include("sanear.php");
    $errores = [];
    $patronTitulo = "/^[aA-zZ ]{2,254}/";
    $patronTexto = "/^[A-Za-z0-9\s]+$/";

    /**Titulo noticia */
    if (isset($_POST['txtTitulo']) && $_POST['txtTitulo'] != "") {
        $txtTitulo = sanear("txtTitulo");
        if (!preg_match($patronTitulo,$txtTitulo)) {
            $errores[] = "formato titulo no valido";
            echo "<p class='error'>Introduzca solo letras</p>";
        }
    }else {
        $errores[] = "Titulo vacio";
        echo "<p class='error'>Campo titulo vacio</p>";
    }

    /**Texto */
    if (isset($_POST['txtTexto']) && $_POST['txtTexto'] != "") {
        $txtTexto = sanear("txtTexto");
        if (!preg_match($patronTexto,$txtTexto)) {
            $errores[] = "formato texto no valido";
            echo "<p class='error'>Formato texto no valido</p>";
        }
    }else {
        $errores[] = "Campo texto vacio, rellene el campo";
        echo "<p class='error'>Campo texto vacio, rellene el campo</p>"; 
    }

    /**Categoria */
    $selCategorias = sanear("selCategorias");

    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $nombreDirectorio = "imagenes/";
        $nombreFichero = $_FILES['foto']['name'];
        $nombreCompleto = $nombreDirectorio.$nombreFichero;
        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombreFichero = $idUnico."-".$nombreFichero;
            $nombreCompleto = $nombreDirectorio.$nombreFichero;
        }
        if (!move_uploaded_file($_FILES['foto']['tmp_name'],$nombreCompleto)) {
            $errores[] = "Error al subir foto";
            echo "<p class='error'>Errpr al subir foto</p>";
        }
    }

    /**Mostrar resutados si todo okay */
    if (empty($errores)) {
        echo "
            <h3>Resultado de la inserccion de Nueva Noticia</h3>
            <p>La noticia ha sido recibida correctamente</p>
            <ul>
                <li>Titulo: $txtTitulo</li>
                <li>Texto: $txtTexto</li>
                <li>Categorias: $selCategorias</li>
                <li>Imagen: <a href='$nombreCompleto'>$nombreFichero</a></li>
            </ul>
        ";
    }
}
