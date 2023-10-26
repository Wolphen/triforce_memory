<?php require "utils/commom.php" ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php';?>
<?php require 'partials/heade.php';?>
<body>
    <div class="banniere">
        <h1 class="banner_title">Sélection du niveau et du thème!</h1>
    </div>
    <br>
    <div class="rules_container">
        <div class="rules">
            <h2 class="rules_title">Règles du jeu:</h2>
            <div class="rules_read">
                Toutes les cartes sont étalées faces cachées sur la table. Le premier joueur retourne deux cartes. 
                Si les images sont identiques, il gagne la paire constituée et rejoue. Si les images sont différentes, 
                il les repose faces cachées là où elles étaient et c'est au joueur suivant de jouer.
            </div>
            
        </div>
    </div>
        <div class = "all_theme">
            <div class ="royal">
            <h1 class="theme_title_title">Thème ROYAL</h1>
                <p class = "royal_select">
                        <a href="<?php echo PROJECT_FOLDER?>games/memory/game_royal.php#easy">  FACILE : 4x4 <br><br></a>
                        <a href="<?php echo PROJECT_FOLDER?>games/memory/game_royal.php#normal"> NORMAL : 8x8 <br><br></a>
                        <a href="<?php echo PROJECT_FOLDER?>games/memory/game_royal.php#hard"> DIFFICILE : 12x12</a>
                </p>
            </div>
            <div class="heros">
                <h1 class="theme_title_title">Thème HÉROS</h1>
                <p class = "heroes_select">
                    <a href="<?php echo PROJECT_FOLDER?>games/memory/game_link.php#easy">  FACILE : 4x4 <br><br></a>
                    <a href="<?php echo PROJECT_FOLDER?>games/memory/game_link.php#normal"> NORMAL : 8x8 <br><br></a>
                    <a href="<?php echo PROJECT_FOLDER?>games/memory/game_link.php#hard"> DIFFICILE : 12x12</a>
                </p>
            </div>
            <div class="vilains">
                <h1 class="theme_title_title">Thème VILAIN</h1>
                <p class = "vilain_select">
                    <a href="<?php echo PROJECT_FOLDER?>games/memory/game_vilain.php#easy">  FACILE : 4x4 <br><br></a>
                    <a href="<?php echo PROJECT_FOLDER?>games/memory/game_vilain.php#normal"> NORMAL : 8x8 <br><br></a>
                        <a href="<?php echo PROJECT_FOLDER?>games/memory/game_vilain.php#hard"> DIFFICILE : 12x12</a>
                </p>
            </div>
        </div>
    <!--<div class="ontop">
        <div class = "theme_title">
            <h1 class="theme_title_title">Thème ROYAL</h1>
            <h1 class="theme_title_title">Thème HÉROS</h1>
            <h1 class="theme_title_title">Thème VILAIN</h1>

        </div> 
        

    </div>
    <div class = "alltheme">
        <div class ="royal">
            <p class = "bigboy">
                <span class = "royaa">
                    <a href="game_royal.html">  FACILE : 4x4 <br><br></a>
                    <a href="game_royal.html"> NORMAL : 8x8 <br><br></a>
                    <a href="game_royal.html"> DIFFICILE : 12x12</a>
                </span>
            </p>
        </div>
        <div class ="heroez">
            <p class = "bigboy">
                <span class = "heroo">
                <a href="game_link.html">  FACILE : 4x4 <br><br></a>
                <a href="game_link.html"> NORMAL : 8x8 <br><br></a>
                <a href="game_link.html"> DIFFICILE : 12x12</a>
            </span>
             </p>

        </div>
        <div class = "villainz">
            <p class = "bigboy">
                <span class = "villaa">
                    <a href="game_vilain.html">  FACILE : 4x4 <br><br></a>
                    <a href="game_vilain.html"> NORMAL : 8x8 <br><br></a>
                    <a href="game_vilain.html"> DIFFICILE : 12x12</a>
                </span>
             </p>
        </div>
-->
 
    </div>  
    </body>
    <?php require SITE_ROOT.'partials/footer.php';?>
    </html>