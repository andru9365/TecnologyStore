create database basedatos;
use basedatos;

create table usuario(
cedulaU int not null primary key,
nombre varchar(40) not null,
apellido varchar(40) not null,
password varchar(40) not null,
correo varchar(40) not null,
direccion varchar(40) not null,
ciudad varchar(40) not null ,
genero varchar(20) not null,
F_nacimiento date not null 
);

