<?php require_once "utils/commom.php" ?>
<?php require_once "utils/database.php" ?>
<?php requeteConnexion() ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>
<!-- Template d'accueil -->
<div class="ds">
    <div class="hi">BIENVENUE A TOI JEUNE HERO</div>
    <div class="hi1">Prouve ta valeur jeune hero du temps</div>
    <div class="hi2"><a href="select_level.html" class="noot">JOUER</a></div>
</div>

<main>
    <!-- Code pour les 3 images de jeux et leurs description -->

    <body class=mains>
        <div>

            <div class="image_jeu">
                <div class="centrage">
                    <img src="<?= PROJECT_FOLDER ?>assets//img/chess_game.png" alt="Logo de jeu d'échec" class="chess">
                    <p class="test">
                        <span class="elo">01 </span>
                        Les échecs
                        <br><br>Un jeu pour les personnes intelligentes, utilisez votre cerveau et prenez le roi et la reine adverse!
                    </p>
                </div>
                <div class="centrage">
                    <img src="<?= PROJECT_FOLDER ?>assets//img/Solitaire.png" alt="Logo du jeu de solitaire" class="solitaire">
                    <p class="test">
                        <span class="elo">02 </span>
                        Le Solitaire
                        <br><br>Le jeu des réel randoms, très souvent jouer quand tu n'as pas de connexion, donc à quoi bon?
                    </p>
                </div>
                <div class="centrage">
                    <img src="<?= PROJECT_FOLDER ?>assets//img/poker.png" alt="logo du jeu de poker" class="poker">
                    <p class="test">
                        <span class="elo">03</span>
                        Le Poker
                        <br><br> Le jeu des personnes qui savent bien mentir ou cacher leurs jeux, jouez et finissez par être le plus riche de vos amis!
                    </p>
                </div>
            </div>

            <!-- Information en temps réelle du nombre de joueurs connectés etc et des carrés de couleurs -->
            <div class="information">
                <div class="inf">
                    <img src="<?= PROJECT_FOLDER ?>assets/img/8k-watch-dogs-2-4k-season-pass-wallpaper-preview (1) (1) (1).png" alt="Image de personne en jeux vidéos" class="wd">
                </div>
                <div class="gbop">

                    <div class="gb">

                        <div class="carreb">
                            <p>
                                <strong><?php echo gamePlayed() ?></strong> <br> Parties jouées
                            </p>
                        </div>
                        <div class="carrep">
                            <p>
                                <strong> <?php echo bestTime() ?> sec</strong> <br> Temps Record

                            </p>
                        </div>
                    </div>
                    <div class="op">

                        <div class="carreg">
                            <p>
                                <strong><?php echo playerON() ?></strong> <br> Joueurs Connectés


                            </p>
                        </div>
                        <div class="carreo">
                            <p>
                                <strong> <?php echo subscribedPlayer() ?></strong> <br> Joueurs Inscrits

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Code pour présenter les 3 participant dont moi enzo le plus fort -->
        <h1 class="squad">Notre Squad de trois Héros</h1>
        <p class="squad">Humble équipe de développement web composés de trois vaillant héros du temps perdu</p>
        <div class="delimiter">

            <img src="<?= PROJECT_FOLDER ?>assets//img/delimiter.png" alt="Delimiter" class="delimiter">
        </div>
        <div class="ppw">
            <img src="<?= PROJECT_FOLDER ?>assets//img/sllappo.png" alt="matthieu" class="imgg">
            <img src="<?= PROJECT_FOLDER ?>assets//img/larbi.png" alt="larbi" class="imgg">
            <img src="<?= PROJECT_FOLDER ?>assets//img/enzo.png" alt="enzo" class="imgg">
        </div>

    </body>
    <div class="chatbox_body">
        <div class="chat_top">
            <img src="<?= PROJECT_FOLDER ?>assets//img/link.png" alt="pp link" class="link_larbi">
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
                <img src="<?= PROJECT_FOLDER ?>assets/img/revali.png" alt="pp revali" class="revali_enzo">
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
                <input type="text" name="chat" id="chat" placeholder="Votre message..." class="msg">
                <input type="submit" value="Envoyer" class="send_input">
            </form>
        </div>
    </div>
</main>

<?php require SITE_ROOT . 'partials/footer.php'; ?>

</html>