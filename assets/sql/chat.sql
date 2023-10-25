
CREATE TABLE messagerie(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    jeux_id INT UNSIGNED NOT NULL , 
    expediteur_id INT UNSIGNED NOT NULL,
    message_text TEXT NOT NULL, 
    horodatage DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

INSERT INTO messagerie ( jeux_id, expediteur_id, message_text, horodatage)
VALUES ('1', '3', 'Slt', '2023-10-16 10:19:55'),
       ('1', '4', 'yo', '2023-10-16 10:19:56'),
       ('1', '5', 'bonjour', '2023-10-16 10:19:57'),
       ('1', '6', 'bjr', '2023-10-16 10:19:58'),
       ('1', '7', 'salut', '2023-10-16 10:19:59'),
       ('1', '8', 'wsh', '2023-10-16 10:20:00'),
       ('1', '9', 'slt', '2023-10-16 10:20:01'),
       ('1', '3', 'ca va', '2023-10-16 10:20:02'),
       ('1', '5', 'bien ou quoi', '2023-10-16 10:20:03'),
       ('1', '9', 'ca se passe', '2023-10-16 10:20:04'),
       ('1', '8', 'ca dit quoi', '2023-10-16 10:20:05'),
       ('1', '6', 'le chatttt monte vitttee', '2023-10-16 10:20:06'),
       ('1', '7', 'gg', '2023-10-16 10:20:07'),
       ('1', '4', 'gg', '2023-10-16 10:20:08'),
       ('1', '3', 'c chaud', '2023-10-16 10:20:09'),
       ('1', '4', 'si si zelda', '2023-10-16 10:20:10'),
       ('1', '5', 'link incroyable', '2023-10-16 10:20:11'),
       ('1', '7', 'c quoi le nom', '2023-10-16 10:20:12'),
       ('1', '6', 'triforce' 'memory', '2023-10-16 10:20:13'),
       ('1', '8', 'gg', '2023-10-16 10:20:14'),
       ('1', '9', 'bien jouer', '2023-10-16 10:20:15'),
       ('1', '8', 'ca donne envie de jouer a zelda', '2023-10-16 10:20:16'),
       ('1', '9', 'graaaaavvvvvvveee', '2023-10-16 10:20:16'),
       ('1', '10', 'yo les gaaaaaaa', '2023-10-16 10:20:17'),
       ('1', '10', 'ca se passe', '2023-10-16 10:20:19');