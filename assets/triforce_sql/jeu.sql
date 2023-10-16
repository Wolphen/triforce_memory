
/* Utilisation de la database  */

USE triforce_memory

/* Création du tableau de jeu */

CREATE TABLE jeu (
    id INT UNSIGNED NOT NULL  AUTO_INCREMENT,
    nom_du_jeu VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
)
ENGINE = INNODB;

INSERT INTO jeu 
VALUE ("1", "Triforce Memory");