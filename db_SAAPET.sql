drop database if exists db_SAAPET;
create database db_SAAPET;
use db_SAAPET;

create table tb_usuarios (
   usu_codigo int auto_increment not null,
   usu_nome varchar(100) not null,
   usu_email varchar(100) not null,
   usu_senha varchar(100) not null,
   usu_cpf varchar(100) not null,
   usu_tel varchar(100),
   primary key(usu_codigo)
)engine=innodb;

create table tb_animais(
   ani_codigo int auto_increment not null,
   ani_nome varchar(50) not null,
   ani_idade varchar(50) not null,
   ani_raça varchar(100) not null,
   ani_porte varchar(100) not null,
   ani_especie varchar(100) not null,
   ani_sobre varchar(300),
   ani_sexo varchar(50) not null,
   primary key (ani_codigo)
)engine=innodb;

create table tb_doacoes(
   doa_codigo int auto_increment not null,
   doa_tipo varchar(100) not null,
   doa_qtd int,
   doa_valor varchar(50),
   doa_usu_codigo int,
   primary key (doa_codigo),
   foreign key (doa_usu_codigo) references tb_usuarios (usu_codigo)
)engine=innodb;

-- create table tb_tiposdedoacao(
 -- tip_codigo int not null auto_increment,
 -- tip_doa varchar(50) not null,
 -- primary key (tip_codigo)
-- )engine=innodb;

-- insert into tb_tiposdedoacao(tip_doa) values ('Mantimentos(Comidas e/ou Remédios)'), ('Dinheiro')