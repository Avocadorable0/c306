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

-- insert into produit values(null,'stylo','01.png',1500); 
-- insert into produit values(null,'Phone','05.png',7500); 

insert into exchange values(1,1);
insert into exchange values(2,2);

select utilisateur.idutilisateur,utilisateur.nom as proprietaire,produit.nom as produit, prix from EXCHANGE
join produit on produit.idproduit=EXCHANGE.idproduit
join utilisateur on utilisateur.idutilisateur=EXCHANGE.idutilisateur;

update exchange set idproduit = 1 where idproduit=2  set idproduit = 2 where idproduit=1;

alter table produit add descri VARCHAR(250);
delete from exchange;
delete from produit;

insert into produit values(null,'Montre','a1.jpg',800000,'Une montre connectee avec un design moderne et plein de fontionnalitee'); 
insert into produit values(null,'Tablette','a2.jpg',2500000,'Nouvelle Ipad de chez apple neuve');
insert into produit values(null,'Phone','a3.jpg',1500000,'tout nouveau Iphone avec le design des anciens modeles');
insert into produit values(null,'Chaussure1','p1.jpg',200000,'Une paire de chaussure tres legere et optimiser pour le sport');
insert into produit values(null,'Chaussure2','p2.jpg',300000,'paire de chaussure Nike moderne et faite pour faire du sport');
insert into produit values(null,'Chaussure3','p3.jpg',350000,'paire de chaussure simple adapter a toute situation');
insert into produit values(null,'Vetement1','v1.jpg',50000,'T shirt pour hommme avec motif camouflage');
insert into produit values(null,'Vetement2','v2.jpg',75000,'maillot allemange');
insert into produit values(null,'Vetement3','v3.jpg',75000,'maillot manchester united');