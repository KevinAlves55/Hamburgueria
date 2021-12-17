USE db_burguergods;

create database db_burguergods;

show databases;

use db_burguergods;

create table tblcategorias
(
	idcategorias int not null auto_increment primary key,
    nome varchar(30) not null
);

show tables;

select * from tblcategorias;

select * from tblcategorias order by idcategorias desc;

create table tblusuarios 
(
	idusuarios int not null auto_increment primary key,
    nome varchar(100) not null,
    usuario varchar(100) not null,
    senha varchar(100) not null
);

alter table tblcategorias add unique(idcategorias);

alter table tblusuarios add unique(idusuarios);

select * from tblusuarios order by idusuarios desc;

create table tblcontatos(
	idcontatos int not null auto_increment primary key,
    nome varchar(100) not null,
    email varchar(100) not null,
    celular varchar(12) not null,
    unique index(idcontatos)
);

select * from tblcontatos;

show tables;

desc tblusuarios;

insert into tblcontatos(
            
            nome,
            email,
            celular
            
        )values(

            'Kevin',
            'kagamer45465@gmail',
            '(11)94518-2565'
            
);

alter table tblcontatos modify column
	celular varchar(25) not null;
    
create table tblprodutos(
	idprodutos int not null auto_increment primary key,
    nome varchar(80) not null,
    descricao varchar(250) not null,
    imagem varchar(200),
    preco float not null,
    desconto float,
    destaque boolean not null,
    unique index (idprodutos)
);

alter table tblprodutos modify column
	destaque boolean not null;

desc tblprodutos;

select * from tblcontatos;
select * from tblprodutos;
select * from tblcategorias;

create table tblprodutosCategorias(
	idprodutosCategorias int not null auto_increment primary key,
    
    idprodutos int not null,
    idcategorias int not null,
    
    constraint FK_Produtos_ProdutosCategorias foreign key(idprodutos) references tblprodutos (idprodutos),
    constraint FK_Categorias_ProdutosCategorias foreign key(idcategorias) references tblcategorias (idcategorias),
    unique index(idprodutosCategorias)
);

insert into tblprodutosCategorias(idprodutos, idcategorias)
values (
	21,1
);

show tables;

select * from tblprodutos;
select * from tblcategorias;
select * from tblcontatos;
select * from tblusuarios;
select * from tblprodutosCategorias;
select nome from tblprodutos;

delete from tblprodutosCategorias;

alter table tblprodutos modify column
imagem varchar(80) not null;

select count(*) as quantidadeProduto from tblprodutos;

select PC.idprodutosCategorias, tblprodutos.nome as Produto, 
tblprodutos.idprodutos, 
tblcategorias.nome as Categoria, tblcategorias.idcategorias
from tblprodutosCategorias as PC
inner join tblprodutos on tblprodutos.idprodutos = PC.idprodutos
inner join tblcategorias on tblcategorias.idcategorias = PC.idcategorias where idprodutosCategorias = 2;

update tblprodutosCategorias set idprodutos = 21, idcategorias = 4
where idprodutosCategorias = 2;

select tblprodutos.nome as Hamburguer, tblcategorias.nome as Categoria,
tblprodutos.preco as Preço, tblprodutos.desconto as Desconto from tblprodutosCategorias as PC
inner join tblprodutos on tblprodutos.idprodutos = PC.idprodutos
inner join tblcategorias on tblcategorias.idcategorias = PC.idcategorias
	where tblcategorias.nome like '%clássico%';

select * from tblprodutos where destaque = 0 and desconto = 0.00 order by idprodutos desc;

select * from tblprodutos where nome like '%zeus%';

select tblprodutos.*, round(preco - ((preco * desconto) / 100), 2) as percentual from tblprodutos;

select PC.idprodutosCategorias, tblprodutos.*, tblcategorias.*, round((preco - ((preco * desconto) / 100)), 2) as percentual
from tblprodutosCategorias as PC
    inner join tblprodutos on tblprodutos.idprodutos = PC.idprodutos
    inner join tblcategorias on tblcategorias.idcategorias = PC.idcategorias
where tblcategorias.nome like '%especiais%';

update tblprodutos
set descricao = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet erat urna, sit amet molestie augue vestibulum vitae.";

select PC.idprodutosCategorias, tblprodutos.*, tblcategorias.*, round((preco - ((preco * desconto) / 100)), 2) as percentual
from tblprodutosCategorias as PC
    inner join tblprodutos on tblprodutos.idprodutos = PC.idprodutos
    inner join tblcategorias on tblcategorias.idcategorias = PC.idcategorias
where tblcategorias.idcategorias = 1;

create view vwListarJuncao as
select PC.idprodutosCategorias, tblprodutos.nome as Produto, tblcategorias.nome as Categoria 

from tblprodutosCategorias as PC
inner join tblprodutos on tblprodutos.idprodutos = PC.idprodutos
inner join tblcategorias on tblcategorias.idcategorias = PC.idcategorias order by idprodutosCategorias desc;

select * from vwListarJuncao;

select tblprodutos.*, round(preco - ((preco * desconto) / 100), 2) as percentual,
        round(preco, 2) as valor from tblprodutos;
        
        
select tblprodutos.*, round(preco - ((preco * desconto) / 100), 2) as percentual, round(preco, 2) as valor
from tblprodutos where nome like '%at%';