<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ADMIN_MAIL', 'mail@gmail.com');
define('PROJECT_FOLDER', '/triforce_memory/');
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . PROJECT_FOLDER);

session_start();

function joueursInscrits(): int
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare('SELECT COUNT(id) AS subscribeNumber FROM utilisateur');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->subscribeNumber;
}

function tempsRecord(): int
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare('SELECT MIN(score_partie) AS bestTime FROM score');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->bestTime;
}

function partiesJouees(): int
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare('SELECT COUNT(id) AS gamePlayed FROM score');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->gamePlayed;
}

function joueursConnectes(): int
{
    $pdo = requeteConnexion();
    $users = count(glob(session_save_path() . '/*'));
    return 0;
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

function checkMailValidity(string $mail): bool
{
    $isMailValid = true;
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $isMailValid = false;
        throw new Exception("Le format de l'email n'est pas valide.");
    }
    return $isMailValid;
}

function checkPseudoValidity(string $pseudo): bool
{
    $isPseudoValid = true;
    if (strlen($pseudo) < 4 || strlen($pseudo) > 16) {
        $isPseudoValid = false;
        throw new Exception("Le pseudo doit être compris entre 4 et 15 caractères");
    }

    return $isPseudoValid;
}
function checkPasswordValidity(string $passwrd, string $passwordConfirm): bool
{

    $isPasswordValid = true;
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $passwrd)) {
        $isPasswordValid = false;
        throw new Exception("Doit contenir une minuscule, une majuscule, un chiffre, un caractère spécial, et de minimum 8 caractères");
    } else if ($passwrd != $passwordConfirm) {
        $isPasswordValid = false;
        throw new Exception("Les mots de passes ne correspondent pas!");
    }
    return $isPasswordValid;
}
function subscribeForm(string $mail, string $pseudo, string $passwrd, string $passwordConfirm): void
{
    $hashedPassword = hash('sha256', $passwrd);
    if (checkMailValidity($mail) && checkPseudoValidity($pseudo) && checkPasswordValidity($passwrd, $passwordConfirm)) {
        try {
            $pdo = requeteConnexion();
            $pdoStatement = $pdo->prepare("INSERT INTO utilisateur (email, pseudo, mot_de_passe)
            VALUES (:mail, :pseudo, :passwrd)");
            $pdoStatement->execute([":mail" => $mail, ":pseudo" => $pseudo, ":passwrd" => $hashedPassword]);
        } catch (PDOException $e) {
            echo $e->getMessage();
            throw new Exception("Erreur de connexion.");
        }
    } else {
        throw new Exception("Il y a une erreur dans le mail ou le pseudo.");
    }
}

function connexionUser(string $emailUser, string $passwrdCo): ?string {
    
        //code...
        $hashdPassword = hash('sha256', $_GET['passwrdCo']);
        $pdo = requeteConnexion();
        $pdoStatement = $pdo->prepare("SELECT id,email, mot_de_passe as mdp FROM utilisateur WHERE email = :mail");
        $pdoStatement->execute([":mail"=> "$emailUser"]);
        $result = $pdoStatement->fetch();
        if ($result->mdp == $hashdPassword) {
            return $result->id;
        }
        return null;
       
   
}