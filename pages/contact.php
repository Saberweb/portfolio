<?php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <title></title>
</head>

<body>
    <header>
        <h1>Portfolio</h1>
    </header>

    <?php
    include "menu.php";
    ?>
    <h2>Bienvenue sur notre page de contact</h2>

    <p><img src="" alt="" /></p>

    <h2>Utiliser le formulaire ci dessous pour nous laisse un commentaire :</h2>


    <div id="grille">
        <?php
        if (isset($message)) :
        ?>
            <h3><?= $message ?></h3>
            <h4>Pour en savoir plus sur les mails</h4>
            <p><a href="https://www.php.net/manual/fr/function.mail.php" target="_blank">https://www.php.net/manual/fr/function.mail.php</a></p>
        <?php
        endif;
        ?>
        <form action="" name="contact" method="POST">

            <input name="thename" placeholder="Votre nom" class="div_txt_form" required /><br>
            <input name="themail" placeholder="Votre adresse mail" class="div_input_form" required /><br>
            <textarea name="thetext" placeholder="Votre texte" class="div_msg" required></textarea><br>
            <input type="submit" value="Envoyer votre message" class="div_input_form"></br>
        </form>

    </div>
</body>

</html>