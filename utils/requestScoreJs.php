<?php
require_once "commom.php";
require_once SITE_ROOT . "utils/database.php";
require SITE_ROOT . 'partials/head.php';
require SITE_ROOT . 'partials/heade.php';


if (isset($_POST["temps"])) {
    echo ($_POST["temps"]);
    echo ($_POST["jeu"]);
    echo ($POST['userId']);
}

try {
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare("INSERT INTO score(id_joueur, id_jeu, difficulte_jeu, score_partie,date_heure)
        VALUES (:userId, 1 , :difficulte,:score, CURRENT_TIMESTAMP())");
    $pdoStatement->execute([":userId" => $POST['userId'], ":diffculte" => $_POST["jeu"],"score" => $_POST["temps"] ]);
} catch (PDOException $e) {
    echo "Erreur de connexion";
}