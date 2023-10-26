<?php require "../../utils/commom.php" ?>
<?php require_once SITE_ROOT . "utils/database.php" ?>
<!DOCTYPE html>
<html lang="fr">
<?php require SITE_ROOT . 'partials/head.php'; ?>
<?php require SITE_ROOT . 'partials/heade.php'; ?>


<body>
    <div class="banniere">
        <h1 class="scores">S C O R E S</h1>
    </div>
    <form method="get">
        <div class="scoresearch">
            <div class="bigdiv">

                <input name="pseudo" placeholder="pseudo" class="contact_formule" />
            </div>
            <div>

                <button class="submit_contactt">Chercher</button>
            </div>
        </div>
    </form>
    <table>

        <thead>
            <tr class="truie">
                <th class=>Nom du jeu</th>
                <th>Pseudo</th>
                <th>Difficulté</th>
                <th>Score</th>


            </tr>

            <?php if (isset($_GET['pseudo']) && $_GET['pseudo'] != "") {
                echo displayOnePlayerGameScores();
            } else {
                echo displayAllGameScores();
            } ?>

        </thead>

    </table>

    <div class="dsip">
        <div class="hi3"><a href="select_level.html">REJOUER</a></div>
    </div>

    <?php require SITE_ROOT . 'partials/footer.php'; ?>

</body>

</html>