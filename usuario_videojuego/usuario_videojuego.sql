CREATE TABLE `usuario_videojuego` (
	`id_usuario` INT NOT NULL ,
	`id_videojuego` INT NOT NULL ,
	PRIMARY KEY (`id_videojuego`, `id_usuario`)
) ENGINE = InnoDB;
