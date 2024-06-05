-- Crée la table Clients(ID, Nom,Prenom,Mail,Telephone)
-- Crée la Comptes(ID, NumeroCompte, Solde, FK_Client) Ou FK_Client est un foreign key de Client(ID)
-- Puis faire le CRUD sur ces deux tables 
-- Donc insertions de données 
-- Lecture de celles ci
-- Mise à jours de celles ci 
-- Suppression de celles ci

CREATE DATABASE banque;
USE banque;

-- Création de la table Clients
CREATE TABLE Clients (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(50) NOT NULL,
    Prenom VARCHAR(50) NOT NULL,
    Mail VARCHAR(100) NOT NULL UNIQUE,
    Telephone CHAR(10) UNIQUE
);

-- Création de la table Comptes
CREATE TABLE Comptes (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    NumeroCompte VARCHAR(25) NOT NULL UNIQUE,
    Solde DECIMAL(10, 2) NOT NULL,
    FK_Client INT,
    FOREIGN KEY (FK_Client) REFERENCES Clients(ID)
);

-- Insertion de données dans la table Clients
INSERT INTO Clients (Nom, Prenom, Mail, Telephone) VALUES
('Bureau', 'Josiane', 'josiane.bureau@example.com', '0632968789'),
('Dupont', 'Bruno', 'bruno.dupont@example.com', '0987654321'),
('Dupond', 'Claude', 'claude.dupond@example.com', '0988654322'),
('Tournant', 'Josiane', 'Josiane.tournant@example.com', '0787652333');

-- Insertion de données dans la table Comptes
INSERT INTO Comptes (NumeroCompte, Solde, FK_Client) VALUES
('12345', 1000.00, 1),
('67890', 2500.50, 2),
('12545', 1200.00, 3),
('12645', 1900.45, 4);

-- Lecture de toutes les données de la table Clients
SELECT * FROM Clients;

-- Lecture de toutes les données de la table Comptes
SELECT * FROM Comptes;

-- Lecture des données avec jointure
SELECT Clients.ID, Clients.Nom, Clients.Prenom, Clients.Mail, Clients.Telephone, Comptes.NumeroCompte, Comptes.Solde
FROM Clients
JOIN Comptes ON Clients.ID = Comptes.FK_Client;

-- Mise à jour de l'adresse mail et du numéro de téléphone pour le client avec l'ID 1
UPDATE Clients
SET Mail = 'josiane.bureau@example.com', Telephone = '0632968789'
WHERE ID = 1;

-- Mise à jour du solde pour le compte avec l'ID 2
UPDATE Comptes
SET Solde = 3000.75
WHERE ID = 2;

DELETE FROM Comptes
WHERE ID = 1;

-- Suppression du client avec l'ID 2 
DELETE FROM Clients
WHERE ID = 2;




