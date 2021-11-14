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
        <h1 class=>Portfolio</h1>
    </header>

    <?php
    include "menu.php";
    ?>

    <h2>Bienvenue sur notre page galerie</h2>


    <div class="galerie">

        <figure id="photo1">
            <a href="images/background2.jpg" data-lightbox="galerie" data-title="Projet 1">
                <img src="images/background2.jpg" alt="Projet 1" width="480" />
            </a>
            <figcaption>Projet 1 </figcaption>
        </figure>


        <figure id="photo2">
            <a href="images/background2.jpg" data-lightbox="galerie" data-title="Projet 2">
                <img src="images/background2.jpg" alt="Projet 2" width="480" />
            </a>
            <figcaption>Projet 2</figcaption>
        </figure>


        <figure id="photo3">
            <a href="images/background2.jpg" data-lightbox="galerie" data-title="Projet 3">
                <img src="images/background2.jpg" alt="Projet 3" width="480" />
            </a>
            <figcaption>Projet 3</figcaption>
        </figure>


        <figure id="photo4">
            <a href="images/background2.jpg" data-lightbox="galerie" data-title="Projet 4">
                <img src="images/background2.jpg" alt="Projet 4" width="480" />
            </a>
            <figcaption>Projet 4</figcaption>

    </div>
    </main>
    <script src="lightbox/js/lightbox-plus-jquery.min.js"></script>

</body>

</html>