/* Création de la DATABASE */

CREATE DATABASE triforce_memory;

CREATE DATABASE triforce_memory CHARACTER SET "utf-8";

/* Création des tables */

CREATE TABLE utilisateur (
    id INT UNSIGNED NOT NULL  AUTO_INCREMENT,
    identifiant VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    mot_de_passe VARCHAR(40) NOT NULL,
    Pseudo VARCHAR(10) NOT NULL,
    date_inscription DATETIME NOT NULL,
    date_connexin DATETIME NOT NULL,
)