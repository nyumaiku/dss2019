create database inventario;

use inventario;

create table categorias(
id int primary key auto_increment,
nombre varchar(200),
descripcion varchar(4000)) engine = InnoDB;

create table productos(
id int primary key auto_increment,
nombre varchar(200),
descripcion varchar(4000),
categoria_id int,
precio double,
existencias int,
 constraint foreign key (categoria_id) references categorias(id)
) engine = InnoDB;

insert into categorias values (null,'Electrodomesticos','Linea blanca'),(null,'Muebles','Muebles para el hogar');

insert into productos values 
(null,'Licuadora','Licuadora 5 velocidades',1,25.00,12),
(null,'Plancha','Plancha de vapor',1,20.00,5),
(null,'Juego de Sala','Sofa y 2 sillones de tela',2,100.00,5),
(null,'Comedor','Mesa y 4 sillas',2,75.00,2);