<?php
include 'conectaDB.php';
$db = conectaDB();
//preparo consulta
$consulta = "DROP DATABASE IF EXISTS `usuarios`;
CREATE DATABASE IF NOT EXISTS `usuarios`;
USE `usuarios`;
CREATE TABLE IF NOT EXISTS `user` (
    `id_user` INT(10) NOT NULL AUTO_INCREMENT COMMENT  'Clave primaria',
    `nombre` VARCHAR(100) NOT NULL COMMENT 'Nombre usuario',
    `login` VARCHAR(100) NOT NULL COMMENT 'Username',
    `password` VARCHAR(100) NOT NULL COMMENT 'Password del usuario',
    `email` VARCHAR(100) NOT NULL COMMENT 'Email del usuario',
    PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT ='Tabla usuarios';";
//ejecuto la consulta
$db->query($consulta);
//creo la consulta para insertar los usuarios;
$insertarUsuarios = "INSERT INTO `user` (nombre,login,password,email) VALUES ('Antonio Martin','user1','adm1','anto1@gmail.com'),
        ('Juan Gomez','user2','adm2','juang@gmail.com'),
        ('Alicia Navarro','user3','adm3','alician@gmail.com'),
        ('Nuria Martinez','user4','adm4','nuriam@gmail.com');
";
$db->query($insertarUsuarios);
$db = null;
?>