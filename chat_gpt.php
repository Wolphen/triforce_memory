<?php require "utils/commom.php" ?>
<?php require 'utils/database.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>
<?php
if (isset($_SESSION['userId'], $_POST['chat'])) {
    insertChatInDatabase($_POST['chat']);
} else {
    echo 'Vous ne pouvez pas envoyer de message vide et vous devez être connecté';
}
?>

<body>
    <div class="chatbox_body">
        <div class="chat_top">
            Chat général
        </div>
        <div class="chatboxScroll">
            <?php echo displayChatAll();
            ?>
            <form method="POST" class="chat_input">
                <input type="text" name="chat" class="chatSend" placeholder="Votre message...">
                <input type="submit" value="Envoyer" class="send_input">
            </form>
        </div>
    </div>
    <?php require SITE_ROOT . 'partials/footer.php'; ?>

</body>

</html>