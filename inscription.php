<?php require "utils/commom.php" ?>
<?= require_once SITE_ROOT . "utils/database.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>
<?php
$email = $_GET['email'] ?? '';
$pseudo = $_GET['pseudo'] ?? '';
$passwrd = $_GET['passwrd'] ?? '';
$passwordConfirm = $_GET['passwordConfirm'] ?? '';



try {
    if (isset($_GET['email'], $_GET['pseudo'],$_GET['passwrd'],$_GET['passwordConfirm'])) {
       subscribeForm($email, $pseudo, $passwrd, $passwordConfirm);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


?>

<body>


    <div class="bannierel">
        <h1>INSCRIPTION</h1>
    </div>
    <!-- Form pour demander l'inscription de la personne via un mail -->
    <div class="forms">
        <form method="get">
            <label for="mail" class="labell"></label>
            <input type="text" id="email" name="email" placeholder="Email" required class="inputl">

            <br>
            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required class="inputl">

            <br>
            <label for="password" class="labell"></label>
            <input type="text" id="password" name="passwrd" placeholder="Mot de passe" required class="inputl">
            <br>
            <label for="password" class="labell"></label>
            <input type="text" id="password" name="passwordConfirm" placeholder="Confirmer le mot de passe" required class="inputl">

            <br>
            <input type="submit" value="inscription" class="inputsubmit">
            <label class="creecompte"><a href="connexion.php">Déjà un compte ? Connectez-vous ici.</a></label>
            </label>
    </div>


    <?= require_once SITE_ROOT . "partials/footer.php"; ?>

</body>

</html>