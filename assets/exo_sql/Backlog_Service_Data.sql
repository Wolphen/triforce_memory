/* Story 1 */

CREATE DATABASE services_db CHARACTER SET 'utf8';

USE services_db;

/* Story 1 Table */

  CREATE TABLE utilisateurs (
    id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo            VARCHAR(40) UNIQUE NOT NULL,
    email             VARCHAR(90) UNIQUE NOT NULL,
    mot_de_passe      VARCHAR(191) NOT NULL,
    adresse           VARCHAR(80) DEFAULT NULL,
    code_postal       VARCHAR(80) DEFAULT NULL,
    ville             VARCHAR(80) DEFAULT NULL,
    pays              VARCHAR(80) DEFAULT NULL,
    portable          VARCHAR(30) DEFAULT NULL,
    fixe              VARCHAR(30) DEFAULT NULL,
    date_inscription  DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
  ) ENGINE = INNODB;

  CREATE TABLE services (
    id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_utilisateur    INT UNSIGNED NOT NULL,
    nom               VARCHAR(80) NOT NULL,
    description       VARCHAR(80) NOT NULL,
    adresse           VARCHAR(80) NOT NULL,
    code_postal       VARCHAR(80) NOT NULL,
    ville             VARCHAR(80) NOT NULL,
    pays              VARCHAR(80) NOT NULL,
    date_service      DATETIME NOT NULL,
    informations      TEXT DEFAULT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (id_utilisateur)  REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE = INNODB;

  CREATE TABLE services_utilisateurs (
    id                INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_service        INT UNSIGNED NOT NULL,
    id_utilisateur    INT UNSIGNED NOT NULL,
    date_inscription  DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (id_service)      REFERENCES services(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_utilisateur)  REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE = INNODB;

  CREATE TABLE messages (
    id              INT UNSIGNED NOT NULL AUTO_INCREMENT,
    id_expediteur   INT UNSIGNED NOT NULL,
    id_receveur     INT UNSIGNED NOT NULL,
    contenu         TEXT,
    date_envoie     DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (id_expediteur)   REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_receveur)     REFERENCES utilisateurs(id) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE = INNODB;

/* Story 2 */

  INSERT INTO utilisateurs (pseudo, email, mot_de_passe, date_inscription)
  VALUES ('Pseudo1', 'hello@free.fr', '123456', NOW());

  INSERT INTO utilisateurs (pseudo, email, mot_de_passe, adresse, code_postal, ville, pays, portable, fixe, date_inscription)
  VALUES
  ('Pseudo2', 'hello2@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo3', 'hello3@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo4', 'hello4@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo5', 'hello5@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo6', 'hello6@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo7', 'hello7@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo8', 'hello8@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo9', 'hello9@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo10', 'hello10@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW()),
  ('Pseudo11', 'hello11@free.fr', '123456', '2 rue du lac', '75019', 'Paris', 'France', '0602030405', '0102030405', NOW());

/* Story 3 */

  UPDATE utilisateurs 
  SET adresse = '2 rue du lac', code_postal = '75019', ville = 'Paris', pays = 'France', portable = '0602030405', fixe = '0102030405'
  WHERE id = 1;

/* Story 4 */

  INSERT INTO services (id_utilisateur, nom, description, adresse, code_postal, ville, pays, date_service)
  VALUES
  (1, 'Laver ma vaisselle', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-28 15:01'),
  (7, 'Laver ma voiture', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-18 13:01'),
  (5, 'Peindre mes murs', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-18 15:01'),
  (4, 'Chasser les pokemons', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-16 15:01'),
  (3, 'Monter mon lave vaisselle', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-13 15:01'),
  (3, 'Repasser mes chemises', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-12 12:01'),
  (9, 'M''aider à trouver une idée de service', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-09 15:01'),
  (11, 'Sortir mes chiens', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-02 11:01'),
  (1, 'Dire bonjour à mes chats', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-25 12:22'),
  (7, 'Aller se promener', 'rendez-vous en forme !', '56 boulevard du champs', '75001', 'Paris', 'France', '2019-11-01 09:01');

/* Story 5-6 */

  INSERT INTO services_utilisateurs (id_service, id_utilisateur, date_inscription)
  VALUES
  (1, 5, '2019-11-15 11:18'),
  (2, 6, '2019-11-15 11:18'),
  (3, 8, '2019-11-15 11:18'),
  (4, 2, '2019-11-15 11:18'),
  (5, 4, '2019-11-15 11:18'),
  (6, 9, '2019-11-15 11:18'),
  (7, 10, '2019-11-15 11:18'),
  (8, 11, '2019-11-15 11:18'),
  (3, 8, '2019-11-15 11:18'),
  (10, 3, '2019-11-15 11:18'),
  (6, 2, '2019-11-15 11:18'),
  (7, 10, '2019-11-15 11:18');

/* Story 7 */

  INSERT INTO messages (id_expediteur, id_receveur, contenu, date_envoie)
  VALUES
  (10, 5, "Coucou j'aimerais m'inscrire!", NOW()),
  (5, 10, "Ah bon moi aussi c'est cool!", NOW()),
  (8, 6, "Salut petit gars", NOW()),
  (11, 3, "Heyo, i speak english very well", NOW()),
  (2, 1, "Ohayo j'aimerais apprendre ce service", NOW()),
  (4, 5, "Do you speak english", NOW()),
  (1, 9, "Vous avez l'air de savoir ce que vous faites", NOW()),
  (7, 4, "Vous pensez que je pourrais faire la même chose ?", NOW()),
  (8, 10, "Bonjour monsieur, je serais intéresser par votre service", NOW()),
  (10, 11, "Hey, j'aimerais faire connaissance!", NOW()),
  (6, 3, "Comment avez vous connus se site", NOW()),
  (3, 2, "J'espère que vous êtes motivés j'ai du taff pour vous!", NOW()),
  (11, 5, "Vous savez faire du responsive?", NOW()),
  (9, 4, "Vous travaillez sur quoi en ce moment?", NOW()),
  (8, 2, "J'aimerais beaucoup apprendre à vos côtés!", NOW()),
  (5, 2, "Tu aimerais pas connaitre mon domaine?", NOW()),
  (5, 9, "Soyons amis!", NOW()),
  (2, 9, "Imagine tu deviens le meilleur de ton métier", NOW()),
  (3, 1, "Tu ferais quoi si tu pouvais changer de service?", NOW()),
  (5, 10, "Faire ou ne pas faire le service, tel est la question?", NOW()),
  (8, 6, "Tu n'aimerais pas arrêter tout ce que tu fait pour changer et aller à mon service?", NOW()),
  (1, 8, "J'aime beaucoup les mangas!", NOW()),
  (3, 4, "Aimerais tu que je te montre tout ce que je sais faire dans mon service?", NOW()),
  (2, 9, "Bah tu répond plus?", NOW()),
  (7, 10, "Ce pourrait-il que mon service t'intéresse?", NOW());

/* Story 8  */

  SELECT U.pseudo, M.contenu, M.date_envoie
  FROM messages as M
  INNER JOIN utilisateurs as U
    ON M.id_receveur = U.id 
  WHERE id_receveur = 3
  ORDER BY date_envoie DESC;

/* Story 9 */

  SELECT U.pseudo as pseudo_envoyeur, T.pseudo as pseudo_receveur, M.contenu, M.date_envoie
  FROM messages AS M
  INNER JOIN utilisateurs AS U
    ON M.id_expediteur = U.id
  INNER JOIN utilisateurs AS T
    ON M.id_receveur = T.id
  WHERE id_expediteur = 10
  AND id_receveur = 11
  ORDER BY date_envoie;

/* Story 10 */

  SELECT S.id, S.nom, S.code_postal, S.ville, S.pays, U.id
  FROM services as S
  LEFT JOIN services_utilisateurs as U
    ON U.id_service = S.id
  WHERE U.id IS NULL
  AND date_service >= NOW()
  ORDER BY date_service DESC, S.ville ASC;

/* STORY 11 */

  SELECT S.*, U.pseudo as pseudo_du_proposeur, U.portable, US.pseudo as pseudo_du_inscrit
  FROM services AS S
  LEFT JOIN services_utilisateurs as SU 
    ON SU.id_utilisateur = S.id
  LEFT JOIN utilisateurs AS U 
    ON U.id = S.id_utilisateur
  LEFT JOIN utilisateurs AS US
    ON US.id = SU.id_utilisateur
  GROUP BY S.id;

/* Story 12 */

  DELETE 
  FROM services
  WHERE id = 1;

/* Story 13  */

  DELETE 
  FROM services_utilisateurs
  WHERE id_utilisateur = 2
  AND id_service = 4;

/* Story 14  */

  DELETE 
  FROM utilisateurs
  WHERE id = 1;

/*  Story 15 */

  DELETE 
  FROM messages 
  WHERE id = 6;

/* Story 16 */

  SELECT S.*, U1.pseudo AS PseudoPropose, U2.pseudo AS pseudo_inscrit, COUNT(P.id_utilisateur) AS NombreParticipations  
  FROM services AS S
  LEFT JOIN utilisateurs AS U1 
    ON S.id_utilisateur = U1.id
  LEFT JOIN services_utilisateurs AS P 
    ON S.id = P.id_utilisateur
  LEFT JOIN Utilisateurs U2 
    ON P.id_utilisateur = U2.id
  GROUP BY S.id
  ORDER BY S.date_service DESC, S.ville, S.nom;

/* Story 17 */

  SELECT S.*, U.pseudo AS pseudo_de_la_personne_inscrite, U.email, U.adresse, U.code_postal, U.ville, U.pays, U.portable, U.fixe, U.date_inscription 
  FROM services_utilisateurs as US
  INNER JOIN services as S
    ON US.id_utilisateur = S.id_utilisateur
  INNER JOIN utilisateurs as U
    ON U.id = US.id_utilisateur
  WHERE U.id = 3
  AND S.date_service = (SELECT MIN(S.date_service) FROM services)
  ORDER BY S.date_service
  LIMIT 1;

/* Story 18 */

  SELECT M.*, (SELECT U.pseudo FROM utilisateurs as U WHERE id = 2) as pseudo_utilisateur,
  (
      SELECT COUNT(SU.id) 
      FROM services_utilisateurs AS SU
      LEFT JOIN services AS S
          ON SU.id_service = S.id
      WHERE SU.id_utilisateur = 2
      AND M.month = MONTH(S.date_service)
  ) as total_participation
  FROM 
      (
          SELECT 1 as month UNION 
          SELECT 2 as month UNION 
          SELECT 3 as month UNION
          SELECT 4 as month UNION 
          SELECT 5 as month UNION
          SELECT 6 as month UNION
          SELECT 7 as month UNION 
          SELECT 8 as month UNION 
          SELECT 9 as month UNION
          SELECT 10 as month UNION 
          SELECT 11 as month UNION 
          SELECT 12 as month
      ) AS M