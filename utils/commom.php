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
    $pdoStatement = $pdo->prepare('SELECT COUNT(id) AS subscribeNumber FROM utilisateur');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->subscribeNumber;
}

function bestTime(): int
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare('SELECT MIN(score_partie) AS bestTime FROM score');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->bestTime;
}

function gamePlayed(): int
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare('SELECT COUNT(id) AS gamePlayed FROM score');
    $pdoStatement->execute();
    $result = $pdoStatement->fetch();
    return $result->gamePlayed;
}

function playerON(): int
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
        if ($key->pseudo == $_SESSION['pseudo']) {
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
function checkPasswordValidity2(string $newPasswrd, string $newPasswordConfirm): bool
{

    $isPasswordValid = true;
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/', $newPasswrd)) {
        $isPasswordValid = false;
        throw new Exception("Doit contenir une minuscule, une majuscule, un chiffre, un caractère spécial, et de minimum 8 caractères");
    } else if ($newPasswrd != $newPasswordConfirm) {
        $isPasswordValid = false;
        throw new Exception("Les mots de passes ne correspondent pas!");
    }
    return $isPasswordValid;
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

function connexionUser(string $emailUser, string $passwrdCo): ?object
{

    $hashdPassword = hash('sha256', $_GET['passwrdCo']);
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare("SELECT *, mot_de_passe as mdp FROM utilisateur WHERE email = :mail");
    $pdoStatement->execute([":mail" => "$emailUser"]);
    $result = $pdoStatement->fetch();
    if ($result->mdp == $hashdPassword) {
        return $result;
    }
    return null;
}
function changeEmail(string $oldMail, string $newMail, string $passwrd): ?string
{
    $pdo = requeteConnexion();
    $pdoPwd = $pdo->prepare("SELECT mot_de_passe as mdp from utilisateur where id = :id");
    $pdoPwd->execute([":id" => $_SESSION["userId"]]);
    $userinfo = $pdoPwd->fetch();
    if ($userinfo->mdp == hash('sha256', $passwrd)) {
        $pdoStatement = $pdo->prepare("UPDATE utilisateur SET email = :mail WHERE id = :id AND email = :oldMail");
        $pdoStatement->execute([":mail" => $newMail, ":id" => $_SESSION['userId'], "oldMail" => $oldMail]);
        if ($pdoStatement->rowCount() == 0) {
            echo 'Erreur pas le bon email';
        }
        return "oui";
    } else {
        echo 'erreur dans la fonction de changement d\'email';
    }
}



function changePasswrd(string $passwrd, string $newPasswrd, string $newPasswrdConfirm): void
{
    if (checkPasswordValidity2($newPasswrd, $newPasswrdConfirm)) {

        $hashdPassword = hash('sha256', $passwrd);
        $newHashdPasswordd = hash('sha256', $newPasswrd);
        $pdo = requeteConnexion();
        $pdoPwd = $pdo->prepare("SELECT mot_de_passe as pawrd from utilisateur where id = :id");
        $pdoPwd->execute([":id" => $_SESSION["userId"]]);
        $userinfo = $pdoPwd->fetch();
        try {
            if ($userinfo->pawrd == $hashdPassword) {
                $pdoStatement = $pdo->prepare("UPDATE utilisateur SET mot_de_passe = :newPasswrd WHERE id = :id");
                $pdoStatement->execute([":newPasswrd" => $newHashdPasswordd, ":id" => $_SESSION['userId']]);
                if ($pdoStatement->rowCount() == 0) {
                    echo 'Erreur pas le bon mot de passe';
                } else {
                    echo 'Il faut que les nouveaux mots de passes soit identique';
                }
                echo 'Changement de mot de passe réussis';
            }
        } catch (PDOException $e) {
            echo 'Erreur lors du changement de mot de passe, veuillez réessayez';
        }
    }
}


$userId = "";
$uploadDir = 'userFiles/';
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
}
$allowedExtensions = array('jpg', 'jpeg', 'png');
$userDirectory = $uploadDir . $userId . '/';
$filename = $userId . '_profile.png';
$filePath = $userDirectory . $filename;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['file'];
        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
        if (!file_exists($userDirectory)) {
            mkdir($userDirectory, 0777, true);
            if (in_array(strtolower($fileExtension), $allowedExtensions)) {

                $userId = $_SESSION['userId'];
                $filename = $userId . '_profile.png';
                $filePath = $userDirectory . $filename;
            }
        }
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
        }
    }
}

$userProfileImage = $filePath;

function insertChatInDatabase(string $chatMessage): void
{
    try {
        $pdo = requeteConnexion();
        $pdoStatement = $pdo->prepare("INSERT INTO messagerie(jeux_id, expediteur_id, message_text, horodatage)
            VALUES (1,:senderId, :messageText, CURRENT_TIMESTAMP())");
        $pdoStatement->execute([":senderId" => $_SESSION['userId'], ":messageText" => $chatMessage]);
    } catch (PDOException $e) {
        echo "Erreur de connexion";
    }
}

function displayChatAll(): ?string
{
    $pdo = requeteConnexion();
    $pdoStatement = $pdo->prepare("SELECT U.id,U.pseudo,M.message_text,M.horodatage FROM messagerie as M INNER JOIN utilisateur as U ON U.id=M.expediteur_id WHERE M.horodatage = NOW()- INTERVAL 1 DAY");
    $pdoStatement->execute();
    $messageInfo = $pdoStatement->fetchALL();
    $display = "";
    foreach ($messageInfo as $message) {
        if ($message->id == $_SESSION['userId']) {
            $display .= "<div class='chat_chat'>";
            $display .= "<div class='block_user'>";
            $display .= "<p class='chat_username'> $message->pseudo</p>";
            $display .= "<p class='chat_user'> $message->message_text</p>";
            $display .= "<p class='chat_time'> $message->horodatage</p>";
            $display .= "</div>";
        } else {
            $display .= "<div class='block_other'>";
            $display .= "<p class='chat_username'>$message->pseudo</p>";
            $display .= "<p class='chat_other'>$message->message_text</p>";
            $display .= "<p class='chat_time'>$message->horodatage</p>";
            $display .= "</div>";
        }
    }
    return $display;
}

function sendContactMail(string $emailUser, string $mailSubject, string $mailMessage): void
{
    $to = 'matlepro78@gmail.com';
    $subject = $mailSubject;
    $message = $mailMessage;
    $headers = $emailUser;
    mail($to, $subject, $message, $headers);
}
