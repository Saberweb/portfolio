<?php
require_once "config.php";
if (!isset($_GET['pages'])) {
    include_once "accueil.php";
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
        default:
            include_once "pages/accueil.php";
    }
}
