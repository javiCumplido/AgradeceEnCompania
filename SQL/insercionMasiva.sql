-- ######################################################
-- CREACIÓN DE TABLAS E ÍNDICES
-- ######################################################

-- ######## USUARIO ########
CREATE TABLE Usuario
(
	NIA CHAR(2) NOT NULL, 
	nombre VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	nombreJesuita VARCHAR(100) NOT NULL,
	nombreImagen VARCHAR(30) NOT NULL, -- Almacena solo el nombre del archivo
	informacionJesuita MEDIUMTEXT NOT NULL, 
	CONSTRAINT PK_Usuario PRIMARY KEY (NIA)
);

-- Índices solicitados para Usuario
CREATE UNIQUE INDEX UN_Usuario_Nombre ON Usuario(nombre);
CREATE INDEX IX_Usuario_Jesuita ON Usuario(nombreJesuita);


-- ######## AGRADECIMIENTO ########
CREATE TABLE Agradecimiento 
(
	idAgradecimiento TINYINT NOT NULL AUTO_INCREMENT,
	idUsuarioEmisor CHAR(2) NOT NULL,
	idUsuarioReceptor CHAR(2) NOT NULL,
	mensaje MEDIUMTEXT NOT NULL,
	CONSTRAINT PK_Agradecimiento PRIMARY KEY (idAgradecimiento)
);

-- Índices solicitados para Agradecimiento
CREATE UNIQUE INDEX UN_Agradecimiento_Receptor ON Agradecimiento(idUsuarioReceptor);

-- Relaciones de Integridad y Reglas de Negocio
ALTER TABLE Agradecimiento 
ADD CONSTRAINT FK_Agradecimiento_Emisor FOREIGN KEY (idUsuarioEmisor) REFERENCES Usuario(NIA),
ADD CONSTRAINT FK_Agradecimiento_Receptor FOREIGN KEY (idUsuarioReceptor) REFERENCES Usuario(NIA),
ADD CONSTRAINT CK_Agradecimiento_Distintos CHECK (idUsuarioEmisor <> idUsuarioReceptor);


-- ######################################################
-- INSERCIÓN MASIVA DE DATOS (3 FILAS POR TABLA)
-- ######################################################

-- ######## USUARIO ########
INSERT INTO Usuario (NIA, nombre, password, nombreJesuita, nombreImagen, informacionJesuita) 
VALUES 
('01', 'Alberto García', 'pass123', 'San Ignacio de Loyola', 'Ignacio.png', 'Fundador de la Compañía de Jesús, conocido por sus ejercicios espirituales.'),
('02', 'Beatriz López', 'secr456', 'San Francisco Javier', 'Javier.png', 'Misionero jesuita que llevó el cristianismo al lejano oriente.'),
('03', 'Carlos Ruiz', 'admin789', 'San Alberto Hurtado', 'Hurtado.png', 'Jesuita chileno conocido por su gran labor social y caridad.');


-- ######## AGRADECIMIENTO ########
-- Se han seleccionado parejas distintas para cumplir con el CHECK y el UNIQUE del receptor
INSERT INTO Agradecimiento (idUsuarioEmisor, idUsuarioReceptor, mensaje) 
VALUES 
('01', '02', 'Muchas gracias por explicarme los conceptos de bases de datos ayer.'),
('02', '03', 'Gracias por compartir tus apuntes de historia, me sirvieron mucho.'),
('03', '01', 'Te agradezco por ayudarme con el proyecto de programación de esta semana.');