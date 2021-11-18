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

     <h3>Utiliser le formulaire ci dessous pour nous laisse un commentaire :</h3>

    <div id="grille">
        <form id="contact" name="contact" method="post" action="contact.php">
            <div class="div_txt_form">
                Votre nom :
            </div>
            <div class="div_input_form">
                <input type="text" name="msg_mail" id="msg_mail" maxlength="70" />
            </div>
            <div class="div_txt_form">
                Votre localité :
            </div>
            <div class="div_input_form">
                <input type="text" name="msg_sujet" id="msg_sujet" maxlength="70" />
            </div>
            <div class="div_msg">
                <br /><strong>Votre message :<strong><br />
                        <textarea id="msg_contenu" name="msg_contenu" cols="20" rows="5" class="zone_msg"></textarea>
            </div>

            <div class="div_input_form">
                <input type="button" name="msg_envoyer" id="msg_envoyer" value="Envoyer le message" onclick="validation_avt_envoi();"/>
            </div>
        </form>
    </div>

    </main>
    
</body>

</html>