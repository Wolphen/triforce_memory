<?php require "utils/commom.php" ?>
<?php require "utils/database.php" ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>
<div class="banniere">
    <h1>MON COMPTE</h1>
</div>
<?php if (isset($_GET['oldMail'], $_GET['newMail'], $_GET['passwrd'])) {
    changeEmail($_GET['oldMail'], $_GET['newMail'], $_GET['passwrd']);
}

?>
<body>
    <!-- Code pour changer d'email ou de mot de passe  -->
    <div class="emailpass">
        <div class=emailf>
            <h2 class="femail">
                Formulaire changement d'email
            </h2>
            <form method="GET" class="formEmail">
                <input type="text" id="oldMail" name="oldMail" placeholder="Ancien email" required class="emailfo">
                <input type="text" id="newMail" name="newMail" placeholder="Nouvel email" required class="emailfo">
                <input type="text" id="password" name="passwrd" placeholder="Mot de passe" required class="emailfo">
                <?php if (isset($_GET['oldMail'], $_GET['newMail'], $_GET['passwrd'])) {
    changeEmail($_GET['oldMail'], $_GET['newMail'], $_GET['passwrd']);
}

?>
                <input type="submit" value="Changer d'email" class="inputsubmit1">
            </form>
        </div>
        <div class="emailf">
            <h2 class="femail">
                Formulaire changement de mots de passe
            </h2>
            <form method="GET" class="formEmail">
                <input type="text" id="mail" name="passwrd" placeholder="Ancien mot de passe" required class="emailfo">
                <input type="text" id="mail" name="newPasswrd" placeholder="Nouveau mot de passe" required class="emailfo">
                <input type="text" id="password" name="newPasswrdConfirm" placeholder="Confirmer le nouveau mot de passe" required class="emailfo">
                <?php if (isset($_GET['passwrd'], $_GET['newPasswrd'], $_GET['newPasswrdConfirm'])) {
    changePasswrd($_GET['passwrd'], $_GET['newPasswrd'], $_GET['newPasswrdConfirm']);
}
?>
                <input type="submit" value="Changer de mot de passe" class="inputsubmit1">
        </div>
    </div>







    <?php require SITE_ROOT . 'partials/footer.php'; ?>
</body>

</html>