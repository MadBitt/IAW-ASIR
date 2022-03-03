DROP DATABASE IF EXISTS equipos;
CREATE DATABASE IF NOT EXISTS equipos;

USE equipos;

CREATE TABLE datosDB (

	equipo varchar (50) PRIMARY KEY,
    golesAFavor int,
    golesEnContra int,
    amarillas int,
    faltas int,
    partidos int

);

CREATE TABLE estadisticasDB (

	equipo varchar (50) PRIMARY KEY,
    golPorPartido float,
    golContraPorPartido float,
    amarillasPartido float,
    amarillasFalta float

);