
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
        INNER JOIN utilisateur AS u1 ON messagerie.expediteur_id = u1.id order by horodatage ASC');
        $sqlrequest->execute();
        $results = $sqlrequest->fetchAll();

        foreach ($results as $result) {
            if ($result->expediteur_id != $_SESSION['userId']) :
        ?>
                <div class="message">
                    <div class="message-sender2"><?= $result->pseudo ?></div>
                    <div class="message-content2"><?= $result->message_text ?></div>
                    <div class="message-statu2">Aujourd'hui à <strong>15h18</strong> vu </div>
                </div>
            <?php
            else :
            ?>
                <div class="message">
                    <div class="message-sender"> <?= $result->pseudo ?></div>
                    <div class="message-content"><?= $result->message_text ?></div>
                    <div class="message-statu">Aujourd'hui à <strong>15h16</strong> vu </div>
                </div>
        <?php
            endif;
        }


        ?>


    </div>
    <div class="chat-input">
        <form method="post">
            <input type="text" id="message-input" name="envoie_msg" placeholder="Saisissez votre message...">
            <button id="send-button">Envoyer</button>
        </from>
            <?php
            if (isset($_POST["envoie_msg"])) {
                $insertionDonnee = $db->prepare('INSERT INTO messagerie (jeux_id, expediteur_id, message_text) 
            VALUES (:jeu, :expediteur, :message_text)');
                $insertionDonnee->execute([':jeu' => 1, ':expediteur' => $_SESSION['userId'], ':message_text' => $_POST['envoie_msg']]);
            }
            ?>
    </div>
</div>