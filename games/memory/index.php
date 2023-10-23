<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/header.css">
    <link rel="stylesheet" href="assets/footer.css">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="icon" href="assets/img/téléchargé.jpg" type="image/x-icon">
    <script src="assets/scripts.js"></script>
    <title>Triforce Memory</title>
</head>
<header>
    <div class="t1"><a href="index.html">Triforce memory</a></div>

    <nav>
        <div class="nav2"><a href="index.html">ACCUEIL</a></div>
            <div class="nav1"><a href="select_level.html">JEU</a></div>
            <div class="nav1"><a href="score.html">SCORES</a></div>
            <div class="nav1"><a href="contact.html"> NOUS CONTACTER</a></div>
            <div class ="nav1"><a href="connexion.html">CONNEXION</a></div>
            <div class ="nav1"><a href="myAccount.html">MON COMPTE</a></div>
    </nav>
</header>
<!-- Template d'accueil -->
<div class="ds">
    <div class="hi">BIENVENUE A TOI JEUNE HERO</div>
    <div class="hi1">Prouve ta valeur jeune hero du temps</div>
    <div class="hi2"><a href="select_level.html" class = "noot">JOUER</a></div>
</div>

<main >
<!-- Code pour les 3 images de jeux et leurs description -->
    <body class = mains>
        <div >

            <div class="image_jeu">
                <div class="centrage">
                    <img src="assets/img/chess_game.png" alt="Logo de jeu d'échec" class="chess">
                    <p class ="test">
                        <span class = "elo">01 </span>
                         Les échecs
                         <br><br>Un jeu pour les personnes intelligentes, utilisez votre cerveau et prenez le roi et la reine adverse!
                    </p>
                </div>
                <div class="centrage">
                    <img src="assets/img/Solitaire.png" alt="Logo du jeu de solitaire" class="solitaire">
                    <p class ="test">
                        <span class = "elo">02 </span>
                         Le Solitaire
                          <br><br>Le jeu des réel randoms, très souvent jouer quand tu n'as pas de connexion, donc à quoi bon?
                    </p>
                </div>
                <div class="centrage">
                    <img src="assets/img/poker.png" alt="logo du jeu de poker" class ="poker">
                    <p class ="test"> 
                        <span class = "elo">03</span>
                        Le Poker
                        <br><br> Le jeu des personnes qui savent bien mentir ou cacher leurs jeux, jouez et finissez par être le plus riche de vos amis!
                    </p>
                </div>
            </div>

<!-- Information en temps réelle du nombre de joueurs connectés etc et des carrés de couleurs -->
         <div class="information">
                <div class = "inf"> 
                    <img src="assets/img/8k-watch-dogs-2-4k-season-pass-wallpaper-preview (1) (1) (1).png" alt="Image de personne en jeux vidéos" class = "wd">  
                </div>
             <div class = "gbop">

                 <div class="gb">
                     
                  <div class ="carreb">
                      <p>
                        <strong>310</strong> <br> Joueurs
                        </p>
                    </div>
                    <div class = "carrep">
                        <p>
                           <strong> 10 sec</strong> <br> Temps Record
                            
                        </p>
                    </div>
                </div>
              <div class ="op">

                    <div class = "carreg">
                        <p>
                            <strong>1020</strong> <br> Joueurs Connectés
                            
                    
                    </p>
                </div>
                <div class = "carreo">
                    <p>
                       <strong> 21 300</strong> <br> Joueurs Inscrits
                        
                    </p>
                </div>
             </div>   
            </div>
          </div>
        </div>
        <!-- Code pour présenter les 3 participant dont moi enzo le plus fort -->
        <h1 class = "squad">Notre Squad de trois Héros</h1>
        <p class = "squad">Humble équipe de développement web composés de trois vaillant héros du temps perdu</p>
        <div class = "delimiter">

            <img src="assets/img/delimiter.png" alt="Delimiter" class = "delimiter">
        </div>
        <div class="ppw">
            <img src="assets/img/sllappo.png" alt="matthieu" class = "imgg">
            <img src="assets/img/larbi.png" alt="larbi" class = "imgg">
            <img src="assets/img/enzo.png" alt="enzo" class = "imgg">
        </div>
        
        </body>
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
</main>

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
    </html>