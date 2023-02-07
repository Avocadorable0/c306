create database Echange;

use Echange;

    create table utilisateur(
        idutilisateur INT(5) auto_increment,
        nom VARCHAR(40),
        gmail varchar(40),
        mdp VARCHAR(40),
        admin int(1),
        PRIMARY key (idutilisateur)
    );

    create table produit(
        idproduit INT(5) auto_increment,
        nom VARCHAR(40),
        photo varchar(40),
        prix double,
        PRIMARY key (idproduit)
    );

create table exchange(
    idutilisateur int(5),
    idproduit INT(5),
    foreign key(idutilisateur) REFERENCES utilisateur(idutilisateur),
    foreign key(idproduit) REFERENCES produit(idproduit)
);

insert into utilisateur values(null,'Faly','faly@gmail.com','123',1);
insert into utilisateur values(null,'Fanilo','fanilo@gmail.com','456',0);

insert into produit values(null,'stylo','01.png',1500); 
insert into produit values(null,'Phone','05.png',7500); 

insert into exchange values(1,1);
insert into exchange values(2,2);

select utilisateur.idutilisateur,utilisateur.nom,produit.idproduit,produit.nom from EXCHANGE
join produit on produit.idproduit=EXCHANGE.idproduit
join utilisateur on utilisateur.idutilisateur=EXCHANGE.idutilisateur;

update exchange set idproduit = 1 where idproduit=2  set idproduit = 2 where idproduit=1;


