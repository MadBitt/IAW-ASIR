


--drop table Articulo_Factura;
--drop table Articulo;
--drop table Factura;
--drop table Cliente;

--drop database bd1_iaw;

create database bd1_iaw;
use bd1_iaw;
CREATE TABLE clientes_iaw (
  id INTEGER UNSIGNED  NOT NULL  ,
  nombre VARCHAR(50)  NOT NULL  ,
  telefono VARCHAR(9)  NOT NULL  ,
PRIMARY KEY(id))
/*TYPE=InnoDB*/
;



INSERT INTO `clientes_iaw` VALUES (1,'Cliente1','111111111');
INSERT INTO `clientes_iaw` VALUES (2,'Cliente2','222222222');
INSERT INTO `clientes_iaw` VALUES (3,'Cliente3','333333333');
INSERT INTO `clientes_iaw` VALUES (4,'Cliente4','444444444');
INSERT INTO `clientes_iaw` VALUES (5,'Cliente5','555555555');


CREATE TABLE usuarios (
  user VARCHAR(50)  NOT NULL ,
  pass VARCHAR(50)  NOT NULL
);

INSERT INTO `usuarios` VALUES ('usu1','pass1');
INSERT INTO `usuarios` VALUES ('usu2','pass2');


commit;