DROP DATABASE IF EXISTS Ciudadano;
CREATE DATABASE IF NOT EXISTS Ciudadano;

use Ciudadano;

create table personas(
	id int(11) auto_increment primary key,
    nombre varchar(20),
    apellido varchar(20),
    telefono bigint(10),
    cedula varchar(11)
);

insert into personas (id, nombre, apellido, telefono, cedula) values (1,"David", "Agudelo", 1, "4");
insert into personas (id, nombre, apellido, telefono, cedula) values (2,"Pepito", "Velazque", 2, "5");
insert into personas (id, nombre, apellido, telefono, cedula) values (3,"Yeyorio", "Gamez", 3, "6");

select * from personas;