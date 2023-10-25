<?php require "utils/commom.php" ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php';?>
<?php require 'partials/heade.php';?>
<body>

   <div class="banniere">
        <h1>C O N N E X I O N</h1>
    </div>
<!-- Code de connexion ci dessous -->
    <form class = "formm">
        <input type="text" id="mail" name="mail" placeholder="Email" required class ="inputtexte" >
        <br>
        <input type="text" id="password" placeholder="Mot de passe" required class ="inputtexte" >
        
        <br>
        <input type="submit" value="Connexion" class ="inputsubmit">  
         <a href="inscription.php"><input type="button" value="Pas de compte ? Crée un compte ici." class ="creecompte"></a>
        
    </form>
    
    
    <?php require SITE_ROOT.'partials/footer.php';?>
    
</body>
</html>