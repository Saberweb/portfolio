<?php
require_once "config.php";
if (!isset($_GET['pages'])) {
    include_once "pages/accueil.php";
} else {
    switch ($_GET['pages']) {
        case "cv":
            include_once "pages/cv.php";
            break;
        case "tuto":
            include_once "pages/tuto.php";
            break;
        case "liens":
            include_once "pages/liens.php";
            break;
        case "contact":
            include_once "pages/contact.php";
            break;
        case "galeries":
            include_once "pages/galeries.php";
            break;
        case "login":
            include_once "pages/login.php";
            break;
            case "admin":
                include_once "pages/admin.php";
                break; 
        default:
            include_once "pages/accueil.php";
    }
}


// dépendances
require_once "config.php";

//modification de variables de configuration du serveur, utile pour le mail sur un serveur local (change le contenu de php.ini pour cette page seulement), inutile d'utiliser ini_set pour envoyer un mail sur un serveur distant, il suffit de paramétrer le smtp comme dans votre doc (gmail.com outlook etc...)
ini_set('SMTP', SMTP_HOST);
ini_set('smtp_port', SMTP_PORT);
ini_set('sendmail_from', MAIL_ADMIN);

// si le formulaire a été envoyé
if (!empty($_POST)) {
    // traîtement des variables (htmlspecialchars est souvant inutile sans insertion dans la DB)
    $thename = htmlspecialchars(trim($_POST['thename']), ENT_QUOTES);
    $themail = filter_var(trim($_POST['themail']), FILTER_VALIDATE_EMAIL);
    $thetext = strip_tags(trim($_POST['thetext']));
    // si au moins 1 équivalante à vide ou false
    if (empty($thename) || !$themail || empty($thetext)) {
        // création d'une variable pour l'erreur
        $message = "Votre mail n'a pas été envoyé, veuillez recommencer";
    } else {
        // on va créer nos variables pour l'envoi des mails

        // premier, envoi du mail à l'admin
        $aQui   = MAIL_ADMIN;
        $sujet = 'Message envoie de Saber CF2M';
        $message = $thename . " à écrit : \n" . $thetext;
        $entete = array(
            'From' => "$themail",
            'Reply-To' => "$themail",
            'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($aQui, $sujet, $message, $entete);

        // envoi du mail de confirmation à l'utilisateur
        $aQui   = $themail;
        $sujet = 'Votre message à bien été reçu , merci à vous';
        $message = "Vous recevrez une réponse dans les plus brefs délais";
        $entete = 'Content-Type: text/plain; charset="utf-8"' . "\r\n"  .
            'From: ' . MAIL_ADMIN  . "\r\n" .
            'Reply-To: ' . MAIL_ADMIN  . "\r\n" .
            'X-Mailer: PHP/' . phpversion();


        mail($aQui, $sujet, $message, $entete);

        // mail($themail, 'Depuis 23-mail', $thename." à écrit : \n".$thetext);
        // création de la variable de confirmation
        $message = "Votre mail a bien été envoyé, merci";
    }

    // si on fermer notre connexion, on le fait ici
}
