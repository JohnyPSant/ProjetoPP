drop database if exists db_SAAPET;
create database db_SAAPET;
use db_SAAPET;

create table tb_usuarios (
   usu_id int auto_increment not null,
   usu_nome varchar(100) not null,
   usu_email varchar(100) not null,
   usu_senha varchar(100) not null,
   usu_cpf varchar(100) not null,
   usu_tel varchar(100),
   primary key(usu_id)
)engine=innodb;

create table tb_animais(
   ani_id int auto_increment not null,
   ani_nome varchar(50) not null,
   ani_idade int not null,
   ani_raça varchar(50),
   ani_usu_id int not null,
   primary key (ani_id),
   foreign key (ani_usu_id) references tb_usuarios (usu_id)
)engine=innodb;

create table tb_doaçoes(
   doa_id int auto_increment not null,
   doa_tipo varchar(100) not null,
   doa_item varchar(100) not null,
   doa_qtd int not null,
   doa_valor double not null,
   doa_usu_id int not null,
   primary key (doa_id),
   foreign key (doa_usu_id) references tb_usuarios (usu_id)
)engine=innodb;