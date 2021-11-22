<?php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <title>Tutoriels</title>
</head>

<body>
    <header>
        <h1>Portfolio</h1>
    </header>

    <?php
    include "menu.php";
    ?>

    <h2>Bienvenue sur notre page de tutoriel</h2>

    <div class="titreAp">
        <p> Comment dessiner avec l’API de dessin et d’animation (Canvas)?</p>
    </div>

    <p class="pptuto">Voici à votre disposition deux vidéos tutoriel sur l'API Canvas que j'ai analysées.</br> Vous trouverez ma critique à coté de chaque vidéo et en bonus ma propre analyse et définition de l'API. </p>

    <p class="pptuto1">Enjoy! </p>

    <h4>J'ai reproduit grace au tuto une petite animation pour que vous puissiez vous faire une des nombreuses choses que vous pouvez produire avec Canvas </h4>

    <canvas id="canvas"> </canvas>

    <div id="video">

        <ul class="liens">
            <iframe class="video1" width="650" height="315" src="https://www.youtube.com/embed/FDBHLX5HFn0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            <p class="analyse1">Tutoriel n°1</br>
                Après avoir essayé plusieurs tutos afin de comprendre l’API canvas je suis tombé sur celui-ci et je vous le recommande à 100% je l’ai trouvé très clair et très concis.</br>
                La personne qui à réalisé ce tuto donne également des cours en ligne pour approfondir le sujet et je trouve 9 ça géniale pour les personnes que ça intéresse.</br>
                Sinon j’ai également apprécié la qualité audiovisuelle.


            </p>
    </div>

    <div id="video_2">

        <ul>
            <iframe class="video2" width="650" height="315" src="https://www.youtube.com/embed/rm_Q0_uwk6w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </ul>

        <p class="analyse2">Tutoriel n°2</br>
            Ce tutoriel paru beaucoup moins bien explicatif par rapport au premier mais il reste également très instructif.</br>
            Il est également moins par rapport au premier et moins complet.</br>
            Je vous conseille donc plutôt de vous diriger vers la documentation officielle ainsi vous pourrez bénéficier de source officielle et de mises à jour régulières.
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

    <script src="script.js"></script>



</body>

</html>