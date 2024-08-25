create database if not exists bazar;

use bazar;


create table categoria
(
    id_categoria integer primary key auto_increment, 
    descricao varchar (40) not null
);

insert into categoria (descricao) values ('Ferramentas');
insert into categoria (descricao) values ('Lampadas');
insert into categoria (descricao) values ('Ferragens');
