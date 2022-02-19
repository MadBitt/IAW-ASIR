DROP DATABASE IF EXISTS notasASIR;

CREATE DATABASE notasASIR;
USE notasASIR;

CREATE TABLE alumno (
codAlumno INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(50),
apellido VARCHAR(50)
);

CREATE TABLE asignatura (
codAsignatura INT AUTO_INCREMENT PRIMARY KEY,
año ENUM('PRIMERO','SEGUNDO'),
nombre VARCHAR(50)
);

CREATE TABLE alumnoNotaAsignatura (
id INT AUTO_INCREMENT PRIMARY KEY,
nota FLOAT,
codAlumno INT,
codAsignatura INT,
FOREIGN KEY (codAlumno) REFERENCES alumno(codAlumno),
FOREIGN KEY (codAsignatura) REFERENCES asignatura(codAsignatura)
);

INSERT INTO alumno (nombre, apellido) VALUES ('Porque', 'Temblas');

INSERT INTO asignatura (año, nombre) VALUES ('PRIMERO', 'SAD');
INSERT INTO asignatura (año, nombre) VALUES ('PRIMERO', 'FOL');
INSERT INTO asignatura (año, nombre) VALUES ('PRIMERO', 'EMF');

INSERT INTO asignatura (año, nombre) VALUES ('SEGUNDO', 'IAW');
INSERT INTO asignatura (año, nombre) VALUES ('SEGUNDO', 'ASO');
INSERT INTO asignatura (año, nombre) VALUES ('SEGUNDO', 'PAR');