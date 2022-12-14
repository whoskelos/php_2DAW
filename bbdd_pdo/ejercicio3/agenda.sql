DROP DATABASE IF EXISTS `agenda`;
CREATE DATABASE `agenda`;
USE `agenda`;
CREATE TABLE `personas` (
    id_persona INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(15) NOT NULL,
    apellidos VARCHAR(25) NOT NULL,
    direccion VARCHAR(25) NOT NULL,
    telefono INT(9) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `usuarios` (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    username VARCHAR(20) NOT NULL,
    password VARCHAR(40) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


