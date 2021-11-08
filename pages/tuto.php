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

    <h1>Bienvenue sur notre page de tutoriel</h1>

    <h3> Comment dessiner avec l’API de dessin et d’animation (Canvas)</h3>
    <a id="paragraphe1">Vous trouverez ci dessous 2 tutos vidéos youtube sur la création d'animation canvas </a>

    <ul class="liens">
        <li><a href="https://www.youtube.com/watch?v=Rcqu3V1Hw-E">Comment utiliser l API JavaScript Canvas pour dessiner</a></li>
        <li><a href="https://www.youtube.com/watch?v=rm_Q0_uwk6w">Animations JavaScript avec l'HTML Canvas</a></li>
    </ul>

    <canvas id="canvas"> </canvas>
    <script src="app.js"></script>


</body>

</html>