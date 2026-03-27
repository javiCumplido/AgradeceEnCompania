-- ######################################################
-- CREACIÓN DE TABLAS E ÍNDICES
-- ######################################################

-- ######## USUARIO ########
CREATE TABLE alumnos (
	equipo char(2) NOT NULL PRIMARY KEY,
	nombre varchar(40) NOT NULL,
	usuario varchar(20) NOT NULL UNIQUE, -- Nombre con el que se inicia sesión. Sin espacios
	password varchar(20) NOT NULL,
	nombreJesuita varchar(100) NOT NULL,
	infoJesuita varchar(250)NOT NULL,
	web varchar(30) NOT NULL UNIQUE -- Nombre de la carpeta, que debe tener un archivo index.php, más el css y la imagen del jesuita.	
);

-- ######## AGRADECIMIENTO ########
CREATE TABLE agradecimientos (
    idAgradecimiento smallint unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
	mensaje varchar(300) NOT NULL,
	idEmisor char(2) NOT NULL,
	idReceptor char(2) NOT NULL,
	fecha_hora timestamp default NOW(),
	CONSTRAINT CK_diferentes CHECK (idEmisor!=idReceptor ),
	CONSTRAINT FK_emisor FOREIGN KEY (idEmisor) REFERENCES alumnos (equipo),
	CONSTRAINT FK_receptor FOREIGN KEY (idReceptor) REFERENCES alumnos (equipo)

);

-- Índices solicitados para Agradecimiento
CREATE UNIQUE INDEX UN_Agradecimiento_Receptor ON agradecimientos(idEmisor, idReceptor);

-- ######################################################
-- INSERCIÓN MASIVA DE DATOS (3 FILAS POR TABLA)
-- ######################################################

-- ######## USUARIO ########
INSERT INTO alumnos (equipo, nombre, usuario, password, nombreJesuita, infoJesuita, web) 
VALUES 
('01', 'Alberto Garcia', 'Alber01_' 'pass123', 'San Ignacio de Loyola', 'Fundador de la Compañía de Jesús, conocido por sus ejercicios espirituales.', 'AlbertoGarcía'),
('02', 'Beatriz Lopez', 'beaLo02' 'secr456', 'San Francisco Javier', 'Misionero jesuita que llevó el cristianismo al lejano oriente.', 'BeatrizLopez'),
('03', 'Carlos Ruiz', 'carl12' 'admin789', 'San Alberto Hurtado', 'Jesuita chileno conocido por su gran labor social y caridad.', 'CarlosRuiz');


-- ######## AGRADECIMIENTO ########
-- Se han seleccionado parejas distintas para cumplir con el CHECK y el UNIQUE del receptor
INSERT INTO agradecimientos (idEmisor, idReceptor, mensaje) 
VALUES 
('01', '02', 'Muchas gracias por explicarme los conceptos de bases de datos ayer.'),
('02', '03', 'Gracias por compartir tus apuntes de historia, me sirvieron mucho.'),
('03', '01', 'Te agradezco por ayudarme con el proyecto de programación de esta semana.');