<?php require "utils/commom.php" ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php';?>
<?php require 'partials/heade.php';?>
    <div class="banniere">
        <h1>MON COMPTE</h1>
    </div>
<body>
    <!-- Code pour changer d'email ou de mot de passe  -->
    <div class = "emailpass">
        <div class = emailf>
            <h2 class = "femail">
                Formulaire changement d'email
            </h2>
            <form method="POST" action="traitement.php" class = "formEmail">
                <input type="text" id="mail" name="mail" placeholder="Ancien email" required class = "emailfo">
                <input type="text" id="mail" name="mail" placeholder="Nouvel email" required class = "emailfo">
                <input type="text" id="password" name="mail" placeholder="Mot de passe" required class = "emailfo">
                <input type="submit" value="Changer d'email" class = "inputsubmit1">
            </form>
        </div>
        <div class = "emailf">
            <h2 class = "femail">
                Formulaire changement de mots de passe
            </h2>
            <form method="POST" action="traitement.php" class = "formEmail">
                <input type="text" id="mail" name="mail" placeholder="Ancien mot de passe" required class = "emailfo">
                <input type="text" id="mail" name="mail" placeholder="Nouveau mot de passe" required class = "emailfo">
                <input type="text" id="password" name="mail" placeholder="Confirmer le nouveau mot de passe" required class = "emailfo">
                <input type="submit" value="Changer de mot de passe" class = "inputsubmit1">
        </div>
    </div>







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
<footer>
    <div class="wrapper">
        <section class="wrap">
            <h3>Information</h3>
            <p>Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>
            <p><span class="orange">Tel : </span><span class="white">06 05 04 03 02</span></p>
            <p><span class="orange">Email : </span><span class="white">support@triforcememory.com</span></p>
            <p><span class="orange">Location : </span><span class="white">Paris</span></p>
        </section>
        <section class="wrap">
            <h3>Triforce Memory</h3>
            <ul class="footer_list">
                <li><a href="select_level.html" class = "fter"><span class="white">Jouer!</a></span></li>
                <li><a href="score.html" class = "fter"><span class="white">Les scores</span></a></li>
                <li><a href="contact.html" class = "fter"><span class="white">Nous contacter</span></a></li>
            </ul>
        </section>
    </div>
    <section class="logo_footer">
        <div><a href="https://www.facebook.com/"><img src="assets/img/facebook.png" alt="Logo facebook"></a></div>
        <div><a href="https://twitter.com/"><img src="assets/img/twitter.png" alt="Logo twitter"></a></div>
        <div><a href="https://www.google.com/"><img src="assets/img/google.png" alt="Logo google"></a></div>
        <div><a href="https://www.pinterest.fr/"><img src="assets/img/pinterest.png" alt="Logo pinterest"></a></div>
        <div><a href="https://www.instagram.com/"><img src="assets/img/instagram.png" alt="Logo instagram"></a></div>
    </section><br><br><br><br>
    <p class="copyright">Copyright © 2022 Tous droits réservés</p>
</footer>
</body>
</html>