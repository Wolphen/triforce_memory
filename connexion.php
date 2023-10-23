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
        <input type="text" id="mail" name="mail" value="Email" required class ="inputtexte" >
        <br>
        <input type="text" id="password" value="Mot de passe" required class ="inputtexte" >
        
        <br>
        <input type="submit" value="Connexion" class ="inputsubmit">  
         <a href="inscription.html"><input type="button" value="Pas de compte ? Crée un compte ici." class ="creecompte"></a>
        
    </form>
    <div class="chatbox_body">
        <div class="chat_top">
            <img src="assets/img/link.png" alt="pp link" class="link_larbi">
            Chat général
        </div>
        <div class="chat_chat">
            <div class="block_user">
                <p class="chat_username">
                    Moi
                </p>
                <p class="chat_user">
                    Hello
                </p>
                <p class="chat_time">
                    Aujourd'hui a 15h22
                </p>
            </div>
            <div class="big_block">
                <img src="assets/img/revali.png" alt="pp revali" class="revali_enzo">
                <div class="block_other">
                    <p class="chat_username">
                        Arthur
                    </p>
                    <p class="chat_other">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <p class="chat_time">
                        Aujourd'hui a 15h23
                    </p>
                </div>
            </div>
            <form action="POST" action="traitement.php" class="chat_input">
                <input type="text" name="chat" id="chat" placeholder="Votre message..." class = "msg">
                <input type="submit" value="Envoyer" class="send_input">
              
            </form>
        </div>
    </div>
    
    <?php require SITE_ROOT.'partials/footer.php';?>
    
</body>
</html>