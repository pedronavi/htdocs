use db_pizzaria;

create table tb_cliente(
	id_cliente int primary key auto_increment,
    nome varchar(150) not null,
    email varchar (150) not null
	);

create table telefone(
	id_telefone int primary key auto_increment,
    telefone1 int not null,
    telefone2 int not null,
    cliente_id_tel int not null,
    constraint fk_telefone foreign key(cliente_id_tel) references tb_cliente (id_cliente)
    );
    
create table endereco (
	id_endereco int primary key auto_increment,
    rua varchar(150) not null,
    bairro varchar(150) not null,
    cidade varchar(150) not null,
    cliente_id_end int not null,
    constraint fk_endereco foreign key(cliente_id_end) references tb_cliente(id_cliente)
    );
    
create table tb_pedidos (
	id_pedidos int primary key auto_increment,
    cliente_id_pedidos int not null,
    funcionarios_id_pedidos int not null,
    constraint fk_pedidos_cli foreign key(cliente_id_pedidos) references tb_cliente(id_cliente),
    constraint fk_pedidos_func foreign key(funcionarios_id_pedidos) references tb_funcionarios(id_funcionarios)
);

create table tb_funcionarios(
	id_funcionarios int primary key auto_increment,
    nome varchar(150) not null,
    cpf varchar(14) not null,
    turno varchar(150) not null
    );

create table tb_pedidos_produtos(
    pedidos_id int not null,
    produtos_id int not null,
    primary key (pedidos_id, produtos_id),
    constraint fk_pp1_id foreign key(pedidos_id) references tb_pedidos (id_pedidos),
    constraint fk_pp2_id foreign key(produtos_id) references tb_produtos (id_produtos)
);

create table tb_produtos(
	id_produtos int primary key auto_increment,
    sabor varchar(150) not null,
    tipo varchar(150) not null,
    preco varchar(150) not null
    );
   
    
