CREATE TABLE if not exists torneos (
	id_torneo int auto_increment,
	id_usuario int,
	id_juego int,
	nombre varchar(50),
	ubicacion varchar (50),
	dimension int,
	codigo_torneo int,
	primary key (id_torneo)
);