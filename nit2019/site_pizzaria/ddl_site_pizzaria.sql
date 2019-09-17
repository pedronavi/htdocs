use db_pizzaria;
   
create table tb_login(
	idlogin int primary key auto_increment,
	email varchar(155) not null,
    senha varchar(155) not null
);

create table tb_cadastro(
	idcadastro int primary key auto_increment,
    email varchar(155) not null,
    senha varchar(155) not null,
    endereco varchar(155) not null,
    cidade varchar(155) not null,
    cep varchar(155) not null
    );