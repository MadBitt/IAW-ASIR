/*Creamos la BASE de DATOS */
drop database if exists gest_Asignaturasdb;
create database gest_Asignaturasdb;
use gest_Asignaturasdb;


/*
delete from Persona;
delete from Inmueble;
delete from Piscina;
delete from Garaje;
delete from InteresadoInmueble;

drop table if exists FamProfesional cascade;
drop table if exists Grado cascade;
drop table if exists Ciclo cascade;
drop table if exists Modulo cascade;
*/


CREATE TABLE FamProfesional (
  codFamilia integer,
  nomFamilia VARCHAR(50),
  PRIMARY KEY (codFamilia)
  )
;

/* Tabla FAMPROFESIONAL */
insert into FAMPROFESIONAL values (1,'ACTIVIDADES FISICAS Y DEPORTIVAS');
insert into FAMPROFESIONAL values (2,'ADMINISTRACION Y GESTION');
insert into FAMPROFESIONAL values (3,'AGRARIA');
insert into FAMPROFESIONAL values (4,'EDIFICACION Y OBRA CIVIL');
insert into FAMPROFESIONAL values (5,'ELECTRICIDAD Y ELECTRONICA');
insert into FAMPROFESIONAL values (6,'HOSTELERIA Y TURISMO');
insert into FAMPROFESIONAL values (7,'INDUSTRIAS ALIMENTARIAS');
insert into FAMPROFESIONAL values (8,'INFORMATICA Y COMUNICACIONES');
insert into FAMPROFESIONAL values (9,'SANIDAD');
insert into FAMPROFESIONAL values (10,'SEGURIDAD Y MEDIO AMBIENTE');
insert into FAMPROFESIONAL values (11,'TRANSPORTE Y MANTENIMIENTO DE VEHICULOS');



/* Tabla GRADO */
CREATE TABLE Grado (
  codGrado integer,
  nomGrado VARCHAR(25),
  PRIMARY KEY (codGrado))
;


insert into GRADO values (1,'MEDIO');
insert into GRADO values (2,'SUPERIOR');


/* Tabla CICLO*/
CREATE TABLE Ciclo (
  codCiclo integer,
  nomCiclo VARCHAR(50),
  codFamilia integer,
  codGrado integer,
  PRIMARY KEY (codCiclo),
  INDEX fk_id_fam(codFamilia),
  INDEX fk_id_grado(codGrado),
  FOREIGN KEY(codFamilia) REFERENCES FAMPROFESIONAL (codFamilia) ON DELETE CASCADE,
  FOREIGN KEY(codGrado) REFERENCES GRADO (codGrado) ON DELETE CASCADE
  )
;

insert into CICLO values (1,'ADMINISTRACION DE SISTEMAS INFORMATICOS',8,2);
insert into CICLO values (2,'DESARROLLO DE APLICACIONES MULTIPLATAFORMA',8,2);
insert into CICLO values (3,'DESARROLLO DE APLICACIONES WEB',8,2);
insert into CICLO values (4,'SISTEMAS MICROINFORMATICOS Y REDES',8,1);


/* Tabla MODULO*/
CREATE TABLE Modulo (
  codModulo integer,
  nomModulo VARCHAR(50),
  codCiclo integer,
  curso integer,
  PRIMARY KEY (codModulo),
  INDEX fk_id_ciclo(codCiclo),
  FOREIGN KEY(codCiclo) REFERENCES CICLO (codCiclo) ON DELETE CASCADE
  )
;

/* Primero ASIR */
insert into MODULO values (1,'PAR',1,1);
insert into MODULO values (2,'ISO',1,1);
insert into MODULO values (3,'FH',1,1);
insert into MODULO values (4,'GBD',1,1);
insert into MODULO values (5,'LMSGI',1,1);
insert into MODULO values (6,'FOL',1,1);
/* Segundo ASIR */
insert into MODULO values (7,'ASO',1,2);
insert into MODULO values (8,'SRI',1,2);
insert into MODULO values (9,'IAW',1,2);
insert into MODULO values (10,'ASGBD',1,2);
insert into MODULO values (11,'SAD',1,2);
insert into MODULO values (12,'EIE',1,2);
insert into MODULO values (13,'FCT',1,2);

/* Primero DAM */
insert into MODULO values (14,'SI',2,2);
insert into MODULO values (15,'BD',2,2);
insert into MODULO values (16,'PRG',2,2);
insert into MODULO values (17,'LMSGI',2,2);
insert into MODULO values (18,'ED',2,2);
insert into MODULO values (19,'FOL',2,2);
insert into MODULO values (20,'IN',2,2);

/* Segundo DAM */
insert into MODULO values (21,'AD',2,2);
insert into MODULO values (22,'DI',2,2);
insert into MODULO values (23,'PMDM',2,2);
insert into MODULO values (24,'PSP',2,2);
insert into MODULO values (25,'SGE',2,2);
insert into MODULO values (26,'EIE',2,2);
insert into MODULO values (27,'FCT',2,2);



/* Primero SMR */
insert into MODULO values (28,'MME',4,1);
insert into MODULO values (29,'RL',4,1);
insert into MODULO values (30,'AO',4,1);
insert into MODULO values (31,'SOM',4,1);
insert into MODULO values (32,'IN',4,1);
insert into MODULO values (33,'FOL',4,1);


/* Segundo SMR*/
insert into MODULO values (35,'SOR',4,2);
insert into MODULO values (36,'SI',4,2);
insert into MODULO values (37,'SR',4,2);
insert into MODULO values (38,'AW',4,2);
insert into MODULO values (39,'IN',4,2);
insert into MODULO values (40,'EIE',4,2);
insert into MODULO values (41,'FCT',4,2);