CREATE TABLE `videojuego` (
`id_videojuego` INT NOT NULL AUTO_INCREMENT ,
`nombre_videojuego` VARCHAR(50) NOT NULL ,
`genero_videojuego` VARCHAR(50) NOT NULL ,
`pegi` INT NOT NULL ,
`empresa_desarrolladora` VARCHAR(50) NOT NULL ,
PRIMARY KEY (`id_videojuego`)) ENGINE = InnoDB;
