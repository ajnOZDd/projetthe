
create database the ;

create  table inscription (
   idInscription int AUTO_INCREMENT primary key,
   nom VARCHAR(25), 
   password VARCHAR(100)
);


insert into inscription (nom , password ) value ('admin', 'mande') ;


CREATE TABLE nomVariete (
    idVariete INT AUTO_INCREMENT PRIMARY KEY,
    nomVariete VARCHAR(255),
    occupationParPied DECIMAL(10, 2),
    rendementParPied DECIMAL(10, 2)
);

CREATE TABLE parcelle (
    idParcelle INT AUTO_INCREMENT PRIMARY KEY,
    numeroParcelle VARCHAR(50),
    surfaceHectare DECIMAL(10, 2),
    idVariete INT,
    nombretotalpiedparparcelle int,
    FOREIGN KEY (idVariete) REFERENCES varieteThe(idVariete)
);

CREATE TABLE cueilleur (
    idCueilleur INT AUTO_INCREMENT PRIMARY KEY,
    nomCueilleur VARCHAR(100),
    genre VARCHAR(7),
    dateNaissance DATE
);
CREATE TABLE categorie (
    idCategorieDepense INT AUTO_INCREMENT PRIMARY KEY,
    nomCategorie VARCHAR(100)
);

CREATE TABLE cueillette (
    idCueillette INT AUTO_INCREMENT PRIMARY KEY,
    dateCueillette DATE,
    idCueilleur INT,
    idParcelle INT,
    poidsCueilli DECIMAL(10, 2),
    FOREIGN KEY (idCueilleur) REFERENCES cueilleur(idCueilleur),
    FOREIGN KEY (idParcelle) REFERENCES parcelle(idParcelle)
);


CREATE TABLE depense (
    idDepense INT AUTO_INCREMENT PRIMARY KEY,
    dateDepense DATE,
    idCategorieDepense INT,
    montant DECIMAL(10, 2),
    FOREIGN KEY (idCategorieDepense) REFERENCES CategorieDepense(idCategorieDepense)
);

create table montantinitial(
    idmontantinitial int AUTO_INCREMENT PRIMARY KEY,
    montant decimal
);
 
CREATE OR REPLACE VIEW poidsCueilliparpersonn AS
SELECT cueilleur.nomCueilleur, cueillette.idParcelle, cueillette.poidsCueilli 
FROM cueillette
JOIN cueilleur ON cueillette.idCueilleur = cueilleur.idCueilleur;


CREATE view varieteparcelle as
select  parcelle.numeroParcelle , parcelle.surfaceHectare , varieteThe.nomVariete
from parcelle , varieteThe where  parcelle.idVariete = varieteThe.idVariete


