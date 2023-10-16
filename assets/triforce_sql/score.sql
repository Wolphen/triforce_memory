/* Utilisation de la base donnée */
USE triforce_memory

/* Création de la table de score */

CREATE TABLE score(
    id INT UNSIGNED NOT NULL AUTO_INCRMENT,
    /*identifiant VARCHAR(40) NOT NULL,*/
    identifiant_joueur VARCHAR(10) NOT NULL,
    identifiant_jeu VARCHAR(40) NOT NULL,
    diffculte_jeu VARCHAR(10) NOT NULL,
    score_partie INT(3) NOT NULL,
    date_heure DATETIME NOT NULL,

    PRIMARY KEY(id)
)
ENGINE = INNODB;


INSERT INTO score (identifiant_joueur, identifiant_jeu, diffculte_jeu, score_partie, date_heure)
VALUES  ('1', '1', 'Difficile', '60', '2023-10-16 12:30:12'),
        ('2', '1', 'Difficile', '24', '2023-10-16 12:30:12'),
        ('3', '1', 'Difficile', '31', '2023-10-16 12:30:12'),
        ('4', '1', 'Difficile', '12', '2023-10-16 12:30:12'),
        ('5', '1', 'Difficile', '120', '2023-10-16 12:30:12'),
        ('1', '1', 'Difficile', '142', '2023-10-16 12:30:12'),
        ('2', '1', 'Difficile', '189', '2023-10-16 12:30:12'),
        ('3', '1', 'Difficile', '109', '2023-10-16 12:30:12'),
        ('4', '1', 'Difficile', '200', '2023-10-16 12:30:12'),
        ('5', '1', 'Difficile', '178', '2023-10-16 12:30:12'),
        ('1', '1', 'Difficile', '132', '2023-10-16 12:30:12'),
        ('2', '1', 'Difficile', '89', '2023-10-16 12:30:12'),
        ('3', '1', 'Difficile', '76', '2023-10-16 12:30:12'),
        ('4', '1', 'Difficile', '65', '2023-10-16 12:30:12'),
        ('5', '1', 'Difficile', '90', '2023-10-16 12:30:12'),
        ('1', '1', 'Difficile', '123', '2023-10-16 12:30:12'),
        ('2', '1', 'Difficile', '154', '2023-10-16 12:30:12'),
        ('3', '1', 'Difficile', '176', '2023-10-16 12:30:12'),
        ('4', '1', 'Difficile', '107', '2023-10-16 12:30:12'),
        ('5', '1', 'Difficile', '137', '2023-10-16 12:30:12'),
        ('1', '1', 'Difficile', '178', '2023-10-16 12:30:12'),
        ('2', '1', 'Difficile', '267', '2023-10-16 12:30:12'),
        ('3', '1', 'Difficile', '376', '2023-10-16 12:30:12'),
        ('4', '1', 'Difficile', '128', '2023-10-16 12:30:12'),
        ('5', '1', 'Difficile', '321', '2023-10-16 12:30:12');