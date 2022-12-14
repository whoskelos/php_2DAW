DROP DATABASE IF EXISTS `usuarios`;
CREATE DATABASE IF NOT EXISTS `usuarios`;
USE `usuarios`;
CREATE TABLE IF NOT EXISTS `user` (
    `id_user` INT(10) NOT NULL AUTO_INCREMENT COMMENT  'Clave primaria',
    `nombre` VARCHAR(100) NOT NULL COMMENT 'Nombre usuario',
    `login` VARCHAR(100) NOT NULL COMMENT 'Username',
    `password` VARCHAR(100) NOT NULL COMMENT 'Password del usuario',
    `email` VARCHAR(100) NOT NULL COMMENT 'Email del usuario',
    PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT ='Tabla usuarios';