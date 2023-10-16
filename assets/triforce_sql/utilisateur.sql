/* Création de la DATABASE */

CREATE DATABASE triforce_memory;


/* Création des tables */

CREATE TABLE utilisateur (
    id INT UNSIGNED NOT NULL  AUTO_INCREMENT,
    email VARCHAR(40) NOT NULL,
    mot_de_passe VARCHAR(40) NOT NULL,
    pseudo VARCHAR(15) NOT NULL,
    date_inscription DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    date_connexion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
)
ENGINE = INNODB;

/* Clef étrangères */

ALTER TABLE utilisateur 
ADD 
/* 5 Insert de la table utilisateur */


INSERT INTO utilisateur (email, mot_de_passe, pseudo, date_inscription, date_connexion)
VALUE   ("enzo7825@gmail.com", "Laleaguedeslegendes", "Wolphen", "2023-04-03 12:30:45", "2023-10-16 13:17:01"),
        ("slatozs@gmail.com", "Lalegendesdesleague", "Wsllappo", "2023-04-07 15:30:45", "2023-10-15 19:17:01"),
        ("skysky@gmail.com", "leaguedeslalegende", "skyscrypersz", "2023-01-02 12:30:45", "2023-10-16 13:11:01"),
        ("lalasagnedejean@gmail.com", "truellezs", "jeanlasagne38", "2022-04-03 13:30:45", "2023-9-16 13:17:01"),
        ("roronoazozo@gmail.com", "manchonesz", "CookieVert", "2023-01-03 12:30:45", "2023-02-23 13:17:13")
        ;


