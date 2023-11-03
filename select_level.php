<?php require "utils/commom.php" ;
require_once SITE_ROOT . "utils/database.php";?>

<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>

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
    <br>
    <br>
    <!-- <div class="all_theme">
        <div class="royal">
            <h1 class="theme_title_title">Thème ROYAL</h1>
            <p class="royal_select">
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_royal.php#easy"> FACILE : 4x4 <br><br></a>
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_royal.php#normal"> NORMAL : 8x8 <br><br></a>
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_royal.php#hard"> DIFFICILE : 12x12</a>
            </p>
        </div>
        <div class="heros">
            <h1 class="theme_title_title">Thème HÉROS</h1>
            <p class="heroes_select">
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_link.php#easy"> FACILE : 4x4 <br><br></a>
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_link.php#normal"> NORMAL : 8x8 <br><br></a>
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_link.php#hard"> DIFFICILE : 12x12</a>
            </p>
        </div>
        <div class="vilains">
            <h1 class="theme_title_title">Thème VILAIN</h1>
            <p class="vilain_select">
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_vilain.php#easy"> FACILE : 4x4 <br><br></a>
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_vilain.php#normal"> NORMAL : 8x8 <br><br></a>
                <a href="<?= PROJECT_FOLDER ?>games/memory/game_vilain.php#hard"> DIFFICILE : 12x12</a>
            </p>
        </div>-->
    <form class="formGame">
        <div class="flexSelect">
            <div>
                <label for="difficulty" class="labelGame">Choisissez votre difficulté: </label>
                <select name="difficulty" id="difficulty" class="selectGame">
                    <option value="facile" class="selectGame" id="easy">FACILE</option>
                    <option value="normal" class="selectGame"id="normal" >NORMAL</option>
                    <option value="difficile" class="selectGame" id="hard">DIFFICILE</option>
                </select>
            </div>
            <div class="divForm">
                <label for="difficulty" class="labelGame">Choisissez votre thème: </label>
                <select name="theme" id="theme" class="selectGame">
                    <option value="hero" class="selectGame" id="hero" >HÉROS</option>
                    <option value="vilains" class="selectGame" id="vilains" >VILLAINS</option>
                    <option value="royal" class="selectGame" id="royal" >ROYAL</option>
                </select>
            </div>
        </div>
        <br>
        <br>
        <input type="button" value="JOUER" onclick="tableRoyalEasy();" class="inputStartGame" id="timerStart">
    </form>


    <div id="gameBoard">

    </div>
</body>
<?php require SITE_ROOT . 'partials/footer.php'; ?>
<script type="text/javascript" src="./assets/script.js"></script>

</html>