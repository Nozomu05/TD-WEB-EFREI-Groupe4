-- Database: montre

-- DROP DATABASE IF EXISTS montre;

CREATE DATABASE montre
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'French_France.1252'
    LC_CTYPE = 'French_France.1252'
    LOCALE_PROVIDER = 'libc'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

-- Database: montre_test

-- DROP DATABASE IF EXISTS montre_test;

CREATE DATABASE montre_test
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'French_France.1252'
    LC_CTYPE = 'French_France.1252'
    LOCALE_PROVIDER = 'libc'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;


	-- Database: montre_test

-- DROP DATABASE IF EXISTS montre_test;

CREATE DATABASE montre_test
    WITH
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'French_France.1252'
    LC_CTYPE = 'French_France.1252'
    LOCALE_PROVIDER = 'libc'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1
    IS_TEMPLATE = False;

CREATE TABLE users (
    id_user SERIAL PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    pseudo VARCHAR(20) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    mdp VARCHAR(255) NOT NULL CHECK (length(mdp) >= 8),
    role TEXT[] NOT NULL default '{user}',
    date_creation TIMESTAMP default CURRENT_TIMESTAMP,
    date_naissance DATE NOT NULL);

CREATE TABLE produits (
 id_produit SERIAL PRIMARY KEY,
 nom VARCHAR(80) NOT NULL,
 prix DECIMAL(9,2) NOT NULL,
 marque VARCHAR(50),
 description TEXT,
 photo TEXT,
 etat VARCHAR(20) NOT NULL,
 type VARCHAR(15) NOT NULL,
 id_proprio INT REFERENCES users(id_user) ON DELETE CASCADE);
 
 CREATE TABLE panier (
     prix DECIMAL(9,2),
     id_user INT REFERENCES users(id_user),
     id_produit INT REFERENCES produits(id_produit));

CREATE TABLE payement (
    code_carte VARCHAR(255) NOT NULL,
    date_exp VARCHAR(255) NOT NULL,
    cvc VARCHAR(255) NOT NULL,
    id_user INT REFERENCES users(id_user) ON DELETE CASCADE);

CREATE TABLE historique (
 id_historique SERIAL PRIMARY KEY,
 nom VARCHAR(80) NOT NULL,
 prix DECIMAL(9,2) NOT NULL,
 marque VARCHAR(50),
 description TEXT,
 photo TEXT,
 etat VARCHAR(20) NOT NULL,
 type VARCHAR(15) NOT NULL,
 date_achat TIMESTAMP default CURRENT_TIMESTAMP,
 id_user INT REFERENCES users(id_user) ON DELETE SET NULL,
 id_proprio INT REFERENCES users(id_user) ON DELETE SET NULL
);



INSERT INTO users(nom, prenom, pseudo, email, mdp, role, date_naissance) VALUES
('perrin', 'giulian', 'giu', 'giulian@gmail.com', 'azertyuiop', '{admin}', '2003-10-05'),
('charlet', 'titouan', 'bof', 'titouan.designer@orange.fr','azertyuiop','{user, admin}', '2004-08-19');

INSERT INTO users(nom, prenom, pseudo, email, mdp, date_naissance) VALUES
('perrin', 'giulian', 'giu', 'giulia@gmail.com', 'azertyuiop', '2003-10-05');

INSERT INTO produits (nom, prix, description, photo, etat, type, id_proprio) VALUES
	('Pomme', 5.33, 'Une belle pomme', 'hfjzhufhjzhfh', 'neuf', 'quartz', 2);
INSERT INTO payement (code_carte, date_exp, cvc, id_user) VALUES
('4990 9909 9404 4444', '12/12/2029','211', 2)



