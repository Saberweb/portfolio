<?php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <h1>Portfolio</h1>
    </header>


    <?php
    include "menu.php";
    ?>
    <h2>Bienvenue sur la page d'accueil de notre site</h2>


    <div class="paragrapheAcc">
        <p class="portfolioliens">Je vous souhaite la bienvenue sur mon site
            <a href="https://fr.wikipedia.org/wiki/Portfolio" title="qu'est ce que ces un portfolio ?" target="_blank">portfolio</a> </br>
            </br>
            Je m’appelle Saber Ben Sedira je vis sur Bruxelles et je suis actuellement en formation au CF2M.
            Je suis en pleine apprentissage de JavaScript, PHP, HTML5 et CSS3.
            J’aimerais me spécialiser dans 2 langages de programmation spécifique et vous proposer à l’avenir un travail de qualité en attendant je vous souhaite une bonne visite sur mon site et n’hésiter pas à me laisser un message via la page contacte.
            </br>
            Au plaisir de vous revoir !
        </p>
    </div>


    <div class="pacceuill">

        <p>
            </br>
            Vous trouverez sur celui-ci plusieurs pages avec un contenu différent.</br>
            Une page d'accueil avec une courte présentation de ma personne.</br>
            Une page galerie avec quelques photos.</br>
            Une page liens avec les liens cliquables qui vous redirigeront sur les sources.</br>
            Une page tutoriels avec une analyse de tutos</br>
            Une page CV pour plus d’informations sur ma personne.</br>
        </p>

    </div>
    <footer>
        <div class="reseaux">
            <ul class="reseauxUl">
                <li class=".reseauxLi"><i class="fab fa-facebook"></i></li>
                </br>

                <li class=".reseauxLi"><i class="fab fa-whatsapp"></i></li>

                <li class=".reseauxLi"><i class="fab fa-github"></i></li>

                <li class=".reseauxLi"><i class="fab fa-twitter"></i></li>
            </ul>
        </div>
    </footer>

    <script src="app.js"></script>

</body>

</html>