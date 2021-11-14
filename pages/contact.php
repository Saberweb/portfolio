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

    <!-- <h3>Utiliser le formulaire ci dessous pour nous laisse un commentaire :</h3>

    <form id="form1" name="form1" method="post" action="contact.php" class="contact">
        <div><label for="frm1_nom">NOM : </label><input name="nom" type="text" id="frm1_nom" size="50" placeholder="Indiquez votre nom" /></div>
        <div><label for="frm1_prenom">PRENOM : </label><input name="prenom" type="text" id="frm1_prenom" size="50" maxlength="50" /></div>
        <div><label for="frm1_ville">VILLE : </label><input name="ville" type="text" id="frm1_ville" size="50" /></div>
        <div><label for="frm1_email">E-MAIL : </label><input name="email" type="email" id="frm1_email" size="50" /></div>
        <div><label for="frm1_message">COMMENTAIRES : </label><textarea name="message" id="frm1_message" cols="40" rows="5"></textarea></div>
        <div><input type="submit" id="frm1_submit" value="Envoyer votre message" /></div>
    </form> -->

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
                <input type="button" style="text-align:center,black;" name="msg_envoyer" id="msg_envoyer" value="Envoyer le message" onclick="validation_avt_envoi();" />
            </div>
        </form>
    </div>

    </main>
    <!-- <?php include('footer.php'); ?> -->
</body>

</html>