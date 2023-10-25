<?php require "utils/commom.php" ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php';?>
<?php require 'partials/heade.php';?>
<?php require 'utils/database.php';?>
<body>

   <div class="banniere">
        <h1>C O N N E X I O N</h1>
    </div>

    <?php if (isset($_GET['emailUser'])){
                connexionUser( ($_GET['emailUser']), ($_GET['passwrdCo']));
    }
    ?>
<!-- Code de connexion ci dessous -->
    <form class = "formm" method ="GET">
        <input type="text" id="mail" name="emailUser" placeholder="Email" required class ="inputtexte" >
        <br>
        <input type="password" id="password"name="passwrdCo" placeholder="Mot de passe" required class ="inputtexte" >
        <br>
        <input type="submit" value="Connexion" class ="inputsubmit">  
         <a href="inscription.php"><input type="button" value="Pas de compte ? Crée un compte ici." class ="creecompte"></a>
        
    </form>
    
    
    <?php require SITE_ROOT.'partials/footer.php';?>
    
</body>
</html>