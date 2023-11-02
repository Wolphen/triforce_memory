
<?php require "utils/commom.php" ?>
<?php require_once SITE_ROOT . "utils/database.php"; ?>

<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>







<div class="chat-container">
    <div class="chat-header">Messagerie</div>
    <div class="chat-messages">

        <?php
        $db = requeteConnexion();
        $sqlrequest = $db->prepare('SELECT * FROM messagerie
        INNER JOIN utilisateur AS u1 ON messagerie.expediteur_id = u1.id order by horodatage DESC');
        $sqlrequest->execute();
        $results = $sqlrequest->fetchAll();

        foreach ($results as $result) {
            if ($result->expediteur_id != $_SESSION['userId']) :
        ?>
                <div class="message">
                    <div class="message-sender2"><?= $result->pseudo ?></div>
                    <div class="message-content2"><?= $result->message_text ?></div>
                    <div class="message-statu2"><?= $result->horodatage ?></div>
                </div>
            <?php
            else :
            ?>
                <div class="message">
                    <div class="message-sender"> <?= $result->pseudo ?></div>
                    <div class="message-content"><?= $result->message_text ?></div>
                    <div class="message-statu"><?= $result->horodatage ?></div>
                </div>
        <?php
            endif;
        }


        ?>


    </div>
    <div class="chat-input">
        <form id="formMessage">
            <input type="text" id="message-input" name="envoie_msg" placeholder="Saisissez votre message...">
            <button id="send-button">Envoyer</button>
        </form>
          
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="assets/chat.js"></script>