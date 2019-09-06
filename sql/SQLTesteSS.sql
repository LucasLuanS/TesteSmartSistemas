create database testesmart;

use testesmart;

create table Nivel_Acesso(
	Id_Nivel_Acesso int not null auto_increment,
    Descricao text not null,
    constraint PK_Id_Nivel_Acesso primary key (Id_Nivel_Acesso)
);

create table Usuario(
	Id_Usuario int not null auto_increment,
    Nome varchar(45) not null,
    Id_Nivel_Acesso int not null,
    constraint PK_Id_Usuario primary key (Id_Usuario),
    constraint FK_Id_Nivel_Acesso foreign key (Id_Nivel_Acesso) references Nivel_Acesso(Id_Nivel_Acesso)
);