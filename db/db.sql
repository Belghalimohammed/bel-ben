drop database morbest;
create database morbest;
use morbest ;

create table Users (
ID int auto_increment primary key,
uname varchar(50),
pass varchar(50),
pic varchar(150),
email varchar(50)

);


create table Comment (
COID int auto_increment primary key,
ID  int,
TID int,
comment varchar(500),
type varchar(50),
date_time  datetime,
constraint ccfk1  foreign key (ID) references Users(ID) on delete cascade 

);



create table Langue (
LID int auto_increment primary key,
langue varchar(15)
);

create table Actor (
AID int auto_increment primary key,
name varchar (50),
nbf int default '0',
pic varchar(150)

);




create table Categorie (
CID int auto_increment primary key,
categorie varchar(50)
);



create table Plays (
PID int auto_increment primary key,
name varchar(50),
year int,
link varchar(150),
time time,
pic varchar(150),
rating int,
CID int,
AID int,
LID int ,
COID int,
constraint pfk1  foreign key (AID) references Actor(AID) on delete cascade, 
constraint pfk2  foreign key (COID) references Comment(COID) on delete cascade, 
constraint pfk3  foreign key (LID) references Langue(LID) on delete cascade ,
constraint pfk4  foreign key (CID) references Categorie(CID) on delete cascade

);
 create table Shows (
SID int auto_increment primary key,
name varchar(50),
season int,
year int,
link varchar(150),
ep int,
pic varchar(150),
time time,
rating int,
AID int,
CID int,
LID int,
COID int,
constraint sfk1  foreign key (AID) references Actor(AID) on delete cascade, 
constraint sfk2  foreign key (COID) references Comment(COID) on delete cascade, 
constraint sfk3  foreign key (LID) references Langue(LID) on delete cascade ,
constraint sfk4  foreign key (CID) references Categorie(CID) on delete cascade 

);


create table Films (
FID int auto_increment primary key,
name varchar(50),
time time,
link varchar(150),
year int,
rating int,
pic varchar(150),
CID int,
AID int,
LID int,
COID int,
constraint ffk1  foreign key (AID) references Actor(AID) on delete cascade, 
constraint ffk2  foreign key (CID) references Categorie(CID) on delete cascade, 
constraint ffk3  foreign key (LID) references Langue(LID) on delete cascade ,
constraint ffk4  foreign key (COID) references Comment(COID) on delete cascade

);


