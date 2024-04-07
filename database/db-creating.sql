-- Création de la table role
CREATE TABLE role (
    id_role INT PRIMARY KEY AUTO_INCREMENT,
    libelle_role VARCHAR(50)
);

-- Création de la table adresse
CREATE TABLE adresse (
    id_adresse INT PRIMARY KEY AUTO_INCREMENT,
    numero_adresse INT,
    rue VARCHAR(50),
    code_postal VARCHAR(50),
    ville VARCHAR(50),
    pays VARCHAR(50)
);

-- Création de la table permis
CREATE TABLE permis (
    id_permis INT PRIMARY KEY AUTO_INCREMENT,
    type_permis VARCHAR(50)
);

-- Création de la table type_vehicule
CREATE TABLE type_vehicule (
    id_type_vehicule INT PRIMARY KEY AUTO_INCREMENT,
    nom_type_vehicule VARCHAR(50),
    id_permis INT NOT NULL,
    FOREIGN KEY (id_permis) REFERENCES permis(id_permis)
);

-- Création de la table options
CREATE TABLE options (
    id_options INT PRIMARY KEY AUTO_INCREMENT,
    libelle_options VARCHAR(50)
);

-- Création de la table marque
CREATE TABLE marque (
    id_marque INT PRIMARY KEY AUTO_INCREMENT,
    nom_marque VARCHAR(50)
);

-- Création de la table modele
CREATE TABLE modele (
    id_modele INT PRIMARY KEY AUTO_INCREMENT,
    nom_modele VARCHAR(50)
);

-- Création de la table mode_paiement
CREATE TABLE mode_paiement (
    id_mode_paiement INT PRIMARY KEY AUTO_INCREMENT,
    type_paiement VARCHAR(50)
);

-- Création de la table categorie
CREATE TABLE categorie (
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    nom_categorie VARCHAR(50),
    prix_location_jour VARCHAR(50),
    prix_location_kilometre VARCHAR(50),
    caution_location DECIMAL(10, 2)
);

-- Création de la table vehicule
CREATE TABLE vehicule (
    id_vehicule INT PRIMARY KEY AUTO_INCREMENT,
    immatriculation VARCHAR(50) UNIQUE,
    kilometrage VARCHAR(50),
    etat_vehicule VARCHAR(50),
    annee_circulation VARCHAR(5),
    id_type_vehicule INT,
    volume VARCHAR(50),
    charge_max VARCHAR(50),
    longueur REAL,
    largeur REAL,
    hauteur REAL,
    FOREIGN KEY (id_type_vehicule) REFERENCES type_vehicule(id_type_vehicule)
);
-- Ajout de la colonne 'annee_circulation' dans la table 'vehicule'
ALTER TABLE `vehicule` ADD `annee_circulation` YEAR NOT NULL AFTER `etat_vehicule`;

-- Création de la table users
CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nom_user VARCHAR(50),
    prenom_user VARCHAR(50),
    username VARCHAR(50),
    passwd VARCHAR(50),
    id_adresse INT,
    id_role INT,
    FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse),
    FOREIGN KEY (id_role) REFERENCES role(id_role)
);

-- Création de la table conducteur
CREATE TABLE conducteur (
    id_conducteur INT PRIMARY KEY AUTO_INCREMENT,
    prenom_conducteur VARCHAR(50),
    nom_conducteur VARCHAR(50),
    tel_conducteur VARCHAR(50),
    id_adresse INT,
    id_permis INT,
    FOREIGN KEY (id_adresse) REFERENCES adresse(id_adresse),
    FOREIGN KEY (id_permis) REFERENCES permis(id_permis)
);

-- Création de la table paiement
CREATE TABLE paiement (
    id_paiement INT PRIMARY KEY AUTO_INCREMENT,
    montant_paiement DECIMAL(10, 2),
    id_mode_paiement INT,
    FOREIGN KEY (id_mode_paiement) REFERENCES mode_paiement(id_mode_paiement)
);

-- Création de la table reservation
CREATE TABLE reservation (
    id_reservation INT PRIMARY KEY AUTO_INCREMENT,
    date_debut_location DATE,
    date_fin_location DATE,
    kilometres_parcourus VARCHAR(50),
    montant_total DECIMAL(10, 2),
    id_user INT,
    id_paiement INT,
    id_modele INT,
    id_marque INT,
    id_options INT,
    id_vehicule INT,
    id_categorie INT,
    id_conducteur INT,
    FOREIGN KEY (id_user) REFERENCES users(id_user),
    FOREIGN KEY (id_paiement) REFERENCES paiement(id_paiement),
    FOREIGN KEY (id_modele) REFERENCES modele(id_modele),
    FOREIGN KEY (id_marque) REFERENCES marque(id_marque),
    FOREIGN KEY (id_options) REFERENCES options(id_options),
    FOREIGN KEY (id_vehicule) REFERENCES vehicule(id_vehicule),
    FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie),
    FOREIGN KEY (id_conducteur) REFERENCES conducteur(id_conducteur)
);


-- Insertion de données dans la table role
INSERT INTO role (id_role, libelle_role) VALUES
(1, 'Gestionnaire'),
(2, 'Responsable de Reservations'),
(3, 'Client');

-- Insertion de données dans la table adresse
INSERT INTO adresse (id_adresse, numero_adresse, rue, code_postal, ville, pays) VALUES
(1, 123, 'Auchan Liberté 6', '75001', 'Dakar', 'Senegal'),
(2, 456, 'Avenue Bourguiba', '75008', 'Dakar', 'Senegal');

-- Insertion de données dans la table permis
INSERT INTO permis (id_permis, type_permis) VALUES
(1, 'B'),
(2, 'C'),
(3, 'D');

-- Insertion de données dans la table mode_paiement
INSERT INTO mode_paiement (id_mode_paiement, type_paiement) VALUES
(1, 'Carte bancaire'),
(2, 'Espèces');

-- Insertion de données dans la table paiement
INSERT INTO paiement (id_paiement, montant_paiement, id_mode_paiement) VALUES
(1, 100.00, 1),
(2, 50.00, 2);

-- Insertion de données dans la table options
INSERT INTO options (id_options, libelle_options) VALUES
(1, 'Climatisation'),
(2, 'GPS'),
(3, 'Toit ouvrant'),
(4, 'Lecteur CD');

-- Insertion de données dans la table marque
INSERT INTO marque (id_marque, nom_marque) VALUES
(1, 'Toyota'),
(2, 'Mercedes-Benz'),
(3, 'Renault'),
(4, 'Ford'),

-- Insertion de données dans la table modele
INSERT INTO modele (id_modele, nom_modele) VALUES
(1, 'Corolla'),
(2, 'GLC'),
(3, 'Clio'),
(4, 'Twingo'),
(5, 'Edge'),
(6, 'F-Max'),
(7, 'Trucks C 380')

-- Insertion de données dans la table categorie
INSERT INTO categorie (id_categorie, nom_categorie, prix_location_jour, prix_location_kilometre, caution_location) VALUES
(1, 'Berline', '50', '0.25', 200.00),
(2, 'Coupé', '100', '0.50', 500.00),
(3, 'Monospace', '100', '0.50', 500.00),
(4, 'SUV & Crossovers', '100', '0.50', 500.00),
(5, 'Pick-ups', '100', '0.50', 500.00),
(6, 'Fourgonnette Utilitaire', '100', '0.50', 500.00),
(7, 'Camion Lourd', '100', '0.50', 500.00),
(8, 'Camion Polyvalent', '100', '0.50', 500.00),
(9, 'Camion Distributeur', '100', '0.50', 500.00);

-- Insertion de données dans la table type_vehicule
INSERT INTO type_vehicule (id_type_vehicule, nom_type_vehicule, id_permis) VALUES
(1, 'Voiture', 1),
(2, 'Camion', 2);

-- Insertion de données dans la table vehicule
INSERT INTO vehicule (id_vehicule, immatriculation, kilometrage, etat_vehicule,  annee_circulation, id_type_vehicule, id_marque, id_modele, volume, charge_max, longueur, largeur, hauteur) VALUES
(1, 'AB123CD', '10000', 'Disponible','2022', 1, 1, 1, '', '', '', '', ''),
(2, 'EF456GH', '20000', 'Réservé', '2023', 1, 2, 2, '', '', '', '', ''),
(3, 'IJ456KL', '20000', 'Disponible', '2023', 2, 4, 6, '500', '1000', 6.0, 2.5, 2.0),
(4, 'MN456OP', '20000', 'Disponible', '2023', 2, 3, 7, '500', '1000', 6.0, 2.5, 2.0)

-- Insertion de données dans la table users
INSERT INTO users (id_user, nom_user, prenom_user, username, passwd, id_adresse, id_role) VALUES
(1, 'Alpha', 'Ndiaye', 'ndiaye@gmail.com', 'mdp123', 1, 3),
(2, 'Sophie', 'Diallo', 'sophie@gmail.com', 'password', 2, 3);

-- Insertion de données dans la table conducteur
INSERT INTO conducteur (id_conducteur, prenom_conducteur, nom_conducteur, tel_conducteur, id_adresse, id_permis) VALUES
(1, 'Pape', 'Sarr', '771452536', 1, 1),
(2, 'Modou', 'Fall', '785246358', 2, 2);

-- Insertion de données dans la table reservation
INSERT INTO reservation (id_reservation, date_debut_location, date_fin_location, kilometres_parcourus, montant_total, id_user, id_paiement, id_modele, id_marque, id_options, id_vehicule, id_categorie, id_conducteur) VALUES
(1, '2024-03-01', '2024-03-05', '500', 250.00, 1, 1, 1, 1, 1, 1, 1, 1),
(2, '2024-03-10', '2024-03-15', '800', 400.00, 2, 2, 2, 2, 2, 2, 2, 2);


CREATE USER 'Momo'@'localhost' IDENTIFIED BY 'devweb17';
GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'Momo'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
CREATE DATABASE IF NOT EXISTS `Momo`;

GRANT ALL PRIVILEGES ON `Momo`.* TO 'Momo'@'localhost';
REVOKE ALL PRIVILEGES ON *.* FROM 'Momo'@'localhost'; REVOKE GRANT OPTION ON *.* FROM 'Momo'@'localhost'; GRANT USAGE ON *.* TO 'Momo'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
REVOKE ALL PRIVILEGES ON *.* FROM 'Momo'@'localhost'; REVOKE GRANT OPTION ON *.* FROM 'Momo'@'localhost'; GRANT SELECT ON *.* TO 'Momo'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;


CREATE USER 'utilisateur1'@'localhost' IDENTIFIED BY 'motdepasse1';
GRANT ALL PRIVILEGES ON basededonnees1.* TO 'utilisateur1'@'localhost';
FLUSH PRIVILEGES;

-- SHOW GRANTS FOR 'Momo'@'localhost;

CREATE TABLE options_vehicule (
    id_vehicule INT, 
    id_options INT,
    FOREIGN KEY (id_vehicule) REFERENCES vehicule(id_vehicule),
    FOREIGN KEY (id_options) REFERENCES options(id_options)
);

CREATE TABLE vehicule (
    id_vehicule INT PRIMARY KEY AUTO_INCREMENT,
    immatriculation VARCHAR(50) UNIQUE,
    kilometrage VARCHAR(50),
    etat_vehicule VARCHAR(50),
    annee_circulation VARCHAR(5),
    id_type_vehicule INT,
    id_marque INT,
    id_modele INT, 
    volume VARCHAR(50),
    charge_max VARCHAR(50),
    longueur REAL,
    largeur REAL,
    hauteur REAL,
    FOREIGN KEY (id_type_vehicule) REFERENCES type_vehicule(id_type_vehicule),
    FOREIGN KEY (id_marque) REFERENCES marque(id_marque),
    FOREIGN KEY (id_modele) REFERENCES modele(id_modele)
);