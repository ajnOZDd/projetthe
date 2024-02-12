Table VarieteThe :
CREATE TABLE VarieteThe (
    idVariete INT AUTO_INCREMENT PRIMARY KEY,
    nomVariete VARCHAR(255),
    occupationParPied DECIMAL(10, 2),
    rendementParPied DECIMAL(10, 2)
);
Table Parcelle :
CREATE TABLE Parcelle (
    idParcelle INT AUTO_INCREMENT PRIMARY KEY,
    numeroParcelle VARCHAR(50),
    surfaceHectare DECIMAL(10, 2),
    idVariete INT,
    FOREIGN KEY (idVariete) REFERENCES VarieteThe(idVariete)
);
Table Cueilleur :
CREATE TABLE Cueilleur (
    idCueilleur INT AUTO_INCREMENT PRIMARY KEY,
    nomCueilleur VARCHAR(100),
    genre ENUM('M', 'F'),
    dateNaissance DATE
);
Table CategorieDepense :
CREATE TABLE CategorieDepense (
    idCategorieDepense INT AUTO_INCREMENT PRIMARY KEY,
    nomCategorie VARCHAR(100)
);
Table Cueillette :
CREATE TABLE Cueillette (
    idCueillette INT AUTO_INCREMENT PRIMARY KEY,
    dateCueillette DATE,
    idCueilleur INT,
    idParcelle INT,
    poidsCueilli DECIMAL(10, 2),
    FOREIGN KEY (idCueilleur) REFERENCES Cueilleur(idCueilleur),
    FOREIGN KEY (idParcelle) REFERENCES Parcelle(idParcelle)
);
Table Depense :
CREATE TABLE Depense (
    idDepense INT AUTO_INCREMENT PRIMARY KEY,
    dateDepense DATE,
    idCategorieDepense INT,
    montant DECIMAL(10, 2),
    FOREIGN KEY (idCategorieDepense) REFERENCES CategorieDepense(idCategorieDepense)
);