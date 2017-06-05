create database basedatos;
use basedatos;

create table usuario(
cedulaU int not null primary key,
nombre varchar(30) not null,
apellido varchar(30) not null,
usuario varchar(30) not null,
password varchar(20) not null,
correo varchar(40) not null,
direccion varchar(40) not null,
ciudad varchar(30) not null ,
genero varchar(20) not null,
F_nacimiento date not null

);
INSERT INTO `usuario`(`cedulaU`, `nombre`, `apellido`, `usuario`, `password`, `correo`, `direccion`, `ciudad`, `genero`, `F_nacimiento`) VALUES ('1014284949','andres felipe','zuleta','andru9365','12345','andru9365@gmail.com','cll 75 n 85-49','bogota','masculino','1996/10/07');

create table productos(
id int primary key AUTO_INCREMENT,
nombre text not null,
descripcion text not null,
imagen text not null,
precio double not null
);
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('1','iMac','El nuevo iMac con pantalla Retina 4K de 21,5 pulgadas. Al igual que el revolucionario modelo de 27 pulgadas.', 'imac.jpg','2500000'); 
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('2','MacBook PRO','Pantalla de 13,3 pulgadas retroiluminado por led y resolucion 2560 x 1600.', 'mac.png','1900000'); 
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('3','MacBook Air','La bateria del MacBook Air dura hasta 12 horas con una sola carga, para que puedas trabajar desde la mañana hasta que vuelvas de la oficina sin necesidad de cargarlo.', 'air.jpeg','2000000'); 
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('4','Mac Mini','El Mac mini es una herramienta poderosa y accesible que te brinda toda la experiencia del Mac en una pequeña caja de 19,7 centimetros.', 'mini2.jpg','800000'); 

INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('5','iPad Pro','El iPad Pro no es solo la nueva generacion de iPad, es una vision totalmente nueva del computador personal para el mundo moderno.', 'ipad.jpg','480000'); 
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('6','iPad mini 4','Que su tamano no te confunda. El iPad mini 4 pone en tus manos un rendimiento y una potencia sin igual', 'minipro.jpg','350000'); 
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('7','iPad','El iPad te ofrece una pantalla, un rendimiento y apps increibles para que hagas todo lo que te gusta. Es practico, facil y magico.', 'ipadn.jpg','390000'); 
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('8','Ipod','Este es un Ipod vercion 2017 color blanco con margen azul y audiculares.', 'ipod.jpg','20000'); 

INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('9','Iphone 7','El iPhone 7 lleva la esencia del iPhone a su maxima expresion. Tiene nuevos y avanzados sistemas de camara. El mejor rendimiento y la mayor duracion de bateria en un iPhone.', 'iphone7.jpg','3300000');
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('10','Iphone 6','El iPhone 6s y el iPhone 6s Plus reflejan el compromiso continuo de Apple con el medio ambiente.', 'iphone6.jpg','1700000');
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('11','Iphone SE','Esta equipado con el chip A9, el mismo del iPhone 6s, una camara de 12 MP que toma increibles fotos y videos 4K, y Live Photos, que les da vida a tus imagenes.', 'iphonese.jpg','1500000');
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('12','Iphone','Pantalla Retina HD con 3D Touch Pantalla Retina HD de 4,7 pulgadas retroiluminada por LED Pantalla Multi-Touch.', 'iphone.jpg','900000');

INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('13','Apple Watch Series 2','Tiene un GPS integrado, resistencia al agua hasta 50 metros1, un procesador de doble nucleo super rapido y una pantalla dos veces mas brillante que antes. ', 'reloj.jpg','1400000');
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('14','Apple Watch Nike+','Es la ultima novedad de una alianza entre dos de las marcas mas innovadoras del mundo. Su increible comodidad y la forma en que te conecta con tus amigos runners a traves del Nike+ Run Club lo convierten en el compañero perfecto para correr.', 'nike.jpg','1200000');
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('15','Apple Watch Edition','Una ceramica que es tan resistente como elegante. Con todas las increibles funcionalidades del Apple Watch Series 2, esta es la nueva generacion de un reloj sin igual.', 'edition.jpg','230000');
INSERT INTO `productos`(`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES ('16','Apple Watch Hermes','Es una pieza de relojeria exclusiva disenada con el equilibrio perfecto entre utilidad y belleza. La coleccion mas reciente combina delicadas correas de cuero Hermes elaboradas artesanalmente y caratulas disenadas por Apple','reloj2.jpg','3800000');





create table factura(
Num_factura int primary key AUTO_INCREMENT,
cedulaU int not null,
nombre varchar(40) not null,
apellido varchar(40) not null,
ciudad varchar(40) not null ,
direccion varchar(40) not null,
Tipo_tarjeta varchar(10)not null,
N_tarjeta varchar(15) not null,
F_caducidad date not null,
C_seguridad int (4) not null

);

create table compras(
id_Compra int primary key AUTO_INCREMENT,
numeroventa int not null,
nombre text not null,
imagen text not null,
precio text not null,
cantidad text not null,
subtotal text not null
);


