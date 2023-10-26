<?php require "utils/commom.php" ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>
<?php require 'utils/database.php'; ?>

<body>

    <div class="banniere">
        <h1>C O N N E X I O N</h1>
    </div>


    <!-- Code de connexion ci dessous -->
    <form class="formm" method="GET">
        <input type="text" id="mail" name="emailUser" placeholder="Email" required class="inputtexte">
        <br>
        <input type="password" id="password" name="passwrdCo" placeholder="Mot de passe" required class="inputtexte">
        <br>
        <input type="submit" value="Connexion" class="inputsubmit">
        <label for="connexion" class="creecompte"><a href="<?php echo PROJECT_FOLDER ?>inscription.php"> Pas de compte ? Crée un compte ici.</a></label>

        <?php if (isset($_GET['emailUser'])) {
            $userConnectionOk = connexionUser(($_GET['emailUser']), ($_GET['passwrdCo']));
            if (!$userConnectionOk) {  ?>
                <p class="warning">Identifiants incorrects. Veuillez réessayer.</p>
        <?php
            } else {
                $_SESSION['userId'] = $userConnectionOk->id;
                $_SESSION['pseudo'] = $userConnectionOk->pseudo;
                header('Location: select_level.php');
            }
        }


        ?>
    </form>

    <?php require SITE_ROOT . 'partials/footer.php'; ?>

</body>

</html>