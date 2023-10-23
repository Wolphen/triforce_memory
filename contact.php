<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="assets/header.css">
    <link rel="icon" href="assets/img/téléchargé.jpg" type="image/x-icon">
</head>
<body>

    <header>
        <div class="t1">Triforce memory</div>

    <nav>
            <div class="nav2"><a href="index.html">ACCUEIL</a></div>
            <div class="nav1"><a href="select_level.html">JEU</a></div>
            <div class="nav1"><a href="score.html">SCORES</a></div>
            <div class="nav1"><a href="contact.html"> NOUS CONTACTER</div></a>
            <div class ="nav1"><a href="connexion.html">CONNEXION</a></div>
            <div class ="nav1"><a href="myAccount.html">MON COMPTE</a></div>
        </nav>
    </header>
    <div class="contact_main">
        <div class="banniere">
            <h1 class="banner_title">Nous Contacter</h1>
        </div>
        <br><br>
        <div class="flex_contact">
            <div class="blue_square">
                <p class="orange_circle">
                    <img src="assets/img/telephone.png" alt="logo telephone" class="logo_contact">
                </p>
                <p class="text_contact">
                    06 05 04 03 02
                </p>
            </div>
            <div class="blue_square">
                <p class="orange_circle">
                    <img src="assets/img/mail.png" alt="logo mail" class="logo_contact">
                </p>
                <p class="text_contact">
                    support@powerofmemory.com
                </p>
            </div>
            <div class="blue_square">
                <p class="orange_circle">
                    <img src="assets/img/localisation.png" alt="logo localisation" class="logo_contact">
                </p>
                <p class="text_contact">
                    P a r i s
                </p>
            </div>
        </div>
        
            <!-- code pour demander le contact -->
            <form method="POST" action="traitement.php" class="block_form">
                <input type="text" name="nom" id="nom" placeholder="Nom" class="contact_form">
                <input type="text" name="mail" id="mail" placeholder="Email" class="contact_form"><br>                
                <input type="text" name="sujet" id="sujet" placeholder="Sujet" class="subject_form"><br>
                <textarea name="message" id="message" placeholder="Message" class="textform"></textarea><br>
                <input type="submit" value="Envoyer" class="submit_contact">
            </form>
        
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