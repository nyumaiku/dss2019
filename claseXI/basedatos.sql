create database clase11;

use clase11;

create table usuarios(
username varchar(100),
password varchar(4000),
role varchar(100)
);

insert into usuarios values('usuario', md5('123456'),'user');

insert into usuarios values('admin', md5('admin'),'admin');


/*select * from usuarios where password = md5('123456');*/