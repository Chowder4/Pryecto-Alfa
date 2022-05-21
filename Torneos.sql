CREATE TABLE if not exists torneos (
	id_torneo int auto_increment,
	id_usuario int,
	id_juego int,
	nombre varchar(50),
	ubicacion varchar (50),
	dimension int,
	codigo_torneo int,
	 finalizado boolean,
	primary key (id_torneo)
);
CREATE TABLE if not exists unirse_torneos(
	id_torneo int,
	id_usuario int
);
