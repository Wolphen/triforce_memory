<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ADMIN_MAIL', 'mail@gmail.com');
define('PROJECT_FOLDER', '/triforce_memory/');
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . PROJECT_FOLDER);

session_start();


function subscribedPlayer(): int
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare('SELECT COUNT(*) AS userNumber FROM utilisateur');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->userNumber;
}
function gamePlayed(): int
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare('SELECT COUNT(*) AS gamePlayed FROM score');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->gamePlayed;
}
function bestTime(): int
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare('SELECT score_partie AS bestTimer FROM score ORDER BY score_partie LIMIT 1');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->bestTimer;
}
function playerOn(): int
{
    $pdo = requeteConnexion();
    $users = count(glob(session_save_path() . '/*'));
    return $users;
}

function displayAllGameScores(): string
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare("SELECT J.nom_du_jeu AS gameName, U.pseudo AS pseudo, S.difficulte_jeu AS gameDifficulty, S.score_partie AS gameScore
    FROM score as S 
    INNER JOIN utilisateur as U ON U.id = S.id_joueur
    INNER JOIN jeu as J ON J.id = S.id_jeu");
    $pdoStatement->execute();
    $result = $pdoStatement->fetchALL();
    $display = "";
    foreach ($result as $key) {
        if ($key->pseudo == "Wolphen") {
            $display .= "<tr>";
            $display .= "<td style='text-decoration: underline;color:orange'> $key->gameName </td>";
            $display .= "<td style='text-decoration: underline;color:orange'> $key->pseudo </td>";
            $display .= "<td style='text-decoration: underline;color:orange'> $key->gameDifficulty </td>";
            $display .= "<td style='text-decoration: underline;color:orange'> $key->gameScore </td>";
            $display .= "</tr>";
        } else {
            $display .= "<tr>";
            $display .= "<td> $key->gameName </td>";
            $display .= "<td> $key->pseudo </td>";
            $display .= "<td> $key->gameDifficulty </td>";
            $display .= "<td> $key->gameScore </td>";
            $display .= "</tr>";
        }
    }
    return $display;
}

function displayOnePlayerGameScores(): string
{
    $pseudoGet = $_GET["pseudo"];
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare("SELECT J.nom_du_jeu AS gameName, U.pseudo AS pseudo, S.difficulte_jeu AS gameDifficulty, S.score_partie AS gameScore
    FROM score as S 
    INNER JOIN utilisateur as U ON U.id = S.id_joueur
    INNER JOIN jeu as J ON J.id = S.id_jeu
    WHERE U.pseudo = :pseudo");
    $pdoStatement->execute([
        ":pseudo" => $_GET['pseudo']
    ]);
    $result = $pdoStatement->fetchALL();
    $display = "";
    foreach ($result as $key) {
        $display .= "<tr>";
        $display .= "<td> $key->gameName </td>";
        $display .= "<td> $key->pseudo </td>";
        $display .= "<td> $key->gameDifficulty </td>";
        $display .= "<td> $key->gameScore </td>";
        $display .= "</tr>";
    }
    return $display;
}

function checkMailValidity($mail): void
{
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Le format de l'email n'est pas valide.");
    }
    try {
        $pdo = requeteConnexion();
        $pdoStatement = $pdo->prepare("INSERT INTO utilisateur (mail) VALUES (mail = :mail");
        $pdoStatement->execute([
            ":mail" => $mail
        ]);
    } catch (PDOException $e) {
        throw new Exception("Erreur de connexion.");
    }
}
