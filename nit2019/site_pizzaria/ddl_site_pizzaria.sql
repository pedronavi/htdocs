use db_pizzaria;
   
create table tb_login(
	idlogin int primary key auto_increment,
	email int not null,
    senha int not null
);

create table tb_cadastro(
	idcadastro int primary key auto_increment,
    email int not null,
    senha int not null,
    endereco int not null,
    cidade int not null,
    cep int not null
    );