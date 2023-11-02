
<?php require "../utils/commom.php" ?>
<?php require_once SITE_ROOT . "utils/database.php"; ?>

<?php
if (isset($_POST["envoie_msg"])) {
    $db = requeteConnexion();
    $insertionDonnee = $db->prepare('INSERT INTO messagerie (jeux_id, expediteur_id, message_text) 
            VALUES (:jeu, :expediteur, :message_text)');
    $insertionDonnee->execute([':jeu' => 1, ':expediteur' => $_SESSION['userId'], ':message_text' => $_POST['envoie_msg']]);
}
?>
