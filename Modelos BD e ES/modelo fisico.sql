create database Biblioteca;
use Biblioteca;

create table Funcionario(
	idFuncionario int unique not null auto_increment,
    nome varchar(100) not null,
    cpf int not null unique,
    dataNasc date not null,
    sexo char(2) not null,
    login varchar(45) not null,
    senha varchar(45) not null,
    primary key(idFuncionario)
);

create table Usuario(
	idUsuario int unique not null auto_increment,
    nome varchar(100) not null,
    cpf int not null unique,
    dataNasc date not null,
    sexo char(2) not null,
    login varchar(45) not null,
    senha varchar(45) not null,
    primary key(idUsuario)
);

create table Livro(
	idLivro int unique not null auto_increment,
    titulo varchar(60) not null,
    autor varchar(100) not null,
    editora varchar(45) not null,
    publicacao year not null,
    edicao int not null,
    exemplar smallint not null,
    isbn varchar(45) not null,
    idFuncionario int not null,
    primary key(idLivro),
    foreign key(idFuncionario) references Funcionario(idFuncionario)
);

create table Login(
	idLogin int unique not null auto_increment,
    senha varchar(45) not null,
    tempoConec time not null,
    idUsuario int not null,
    idFuncionario int not null,
    primary key(idLogin),
    foreign key(idUsuario) references Usuario(idUsuario),
    foreign key(idFuncionario) references Funcionario(idFuncionario)
);

insert into Funcionario (nome, cpf, dataNasc, sexo, login, senha)
value('Administrador', '00000000000', '0000-00-00', 'i', 'admin', 'admin123');
