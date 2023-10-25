<?php require "utils/commom.php" ?>
<?= require_once SITE_ROOT . "utils/database.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>

<?php


    try{
        if (isset($_GET['mail']) && $_GET['mail'] != "" )
        checkMailValidity($_GET["mail"]);
    } 
    catch(Exception $e){
         $feedback=$e->getMessage();
    }





?>
<body>


    <div class="bannierel">
        <h1>INSCRIPTION</h1>
    </div>
    <!-- Form pour demander l'inscription de la personne via un mail -->
    <form class="forms" method="get">
        <label for="mail" class="labell"></label>
        <input type="text" id="mail" name="mail" placeholder="Email" required class="inputl">
       <?php if (isset($_GET['mail']) && $_GET['mail'] != "" ) 
       echo $feedback
       ?>
        
        <br>
        <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required class="inputl">
        <br>
        <label for="password" class="labell"></label>
        <input type="text" id="password" name="password" placeholder="Mot de passe" required class="inputl">
        <br>
        <label for="password" class="labell"></label>
        <input type="text" id="password" name="password" placeholder="Confirmer le mot de passe" required class="inputl">

        <br>
        <input type="submit" value="inscription" class="inputsubmit">
    </form>
    <a href="connexion.php"><input type="button" value="Déjà un compte ? Connectez-vous ici." class="creecompte"></a>

    <?= require_once SITE_ROOT . "partials/footer.php"; ?>

</body>

</html>