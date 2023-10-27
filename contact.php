<?php require_once "utils/commom.php" ?>
<!DOCTYPE html>
<html lang="fr">
<?php require 'partials/head.php'; ?>
<?php require 'partials/heade.php'; ?>

<?php 
    if(isset($_POST['mail'], $_POST['subject'], $_POST['message'])) {
        sendContactMail($_POST['mail'],$_POST['subject'],$_POST['message']);
    }
?>

<body>
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

    <?php require SITE_ROOT . 'partials/footer.php'; ?>

</body>

</html>