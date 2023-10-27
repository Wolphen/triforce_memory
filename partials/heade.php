<html lang="fr">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>assets/header.css">
    <link rel="stylesheet" href="<?= PROJECT_FOLDER ?>assets/main.css">
    <link rel="icon" href="<?= PROJECT_FOLDER ?>assets/img/téléchargé.jpg" type="image/x-icon">
    <script src="<?= PROJECT_FOLDER ?>assets/scripts.js"></script>
    <title>Triforce Memory</title>
</head>
<header>
    <div class="t1"><a href="<?= PROJECT_FOLDER ?>index.php">Triforce memory</a></div>
    <nav> 
        <div class="nav2"><a href="<?= PROJECT_FOLDER ?>index.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'index.php') ? 'class="active"' : '' ?>>ACCUEIL</a></div>
        <div class="nav1"><a href="<?= PROJECT_FOLDER ?>select_level.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'select_level.php') ? 'class="active"' : '' ?>>JEU</a></div>
        <div class="nav1"><a href="<?= PROJECT_FOLDER ?>games/memory/score.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/score.php') ? 'class="active"' : '' ?>>SCORES</a></div>
        <div class="nav1"><a href="<?= PROJECT_FOLDER ?>contact.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'contact.php') ? 'class="active"' : '' ?>> NOUS CONTACTER</a></div>
        <div class="nav1"><a href="<?= PROJECT_FOLDER ?>chat_gpt.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'chat_gpt.php') ? 'class="active"' : '' ?>>CHAT</a></div>
        <div class="nav1"><a href="<?= PROJECT_FOLDER ?>connexion.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'connexion.php') ? 'class="active"' : '' ?>>

        <?php if (!isset($_SESSION['pseudo'])) {
            echo 'CONNEXION';
        }
        else {
            echo '';
        }?></a></div>

        <div class="nav1"><a href="<?= PROJECT_FOLDER ?>myAccount.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'myAccount.php') ? 'class="active"' : '' ?>>
        <?php if (isset($_SESSION['pseudo'])) {
            echo $_SESSION['pseudo'];
        }
        else {
            echo '';
        }?>
        
    </a></div>
    </nav>
</header>

</html>