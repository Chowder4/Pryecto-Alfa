CREATE TABLE `videojuegos` (
`id_juego` INT NOT NULL AUTO_INCREMENT ,
`nombre_juego` VARCHAR(50) NOT NULL ,
`genero_juego` VARCHAR(50) NOT NULL ,
`pegi` INT NOT NULL ,
`multijugador` BOOLEAN NOT NULL ,
`empresa_desarrolladora` VARCHAR(50) NOT NULL ,
PRIMARY KEY (`id_juego`)) ENGINE = InnoDB;
