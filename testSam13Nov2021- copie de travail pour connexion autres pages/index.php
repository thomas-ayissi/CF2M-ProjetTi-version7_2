<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Portfolio Thomas AYISSI</title>
    <link href="decor/style.css" rel="stylesheet">
</head>

<body id="global">
<div class="container">

<?php
/*
Contrôleur frontal
*/
// chargement des dépendances
require_once "config.php"; // configuration
// si on a un fichier de fonctions on le charge ici
// si on a besoin de se connecter à une base de donnée, on se connecte ici

//inclusion des variables et fonctions
//Erreur On avait deux notations de include. Sur mon ancien fichier
//Mes includes étaient écrits avec des parenthèses.
//Vérifier et harmoniser la nomenclature

// Routeur (identifier la signification de la ligne isset et
// du pg qu il faut get. La résolution du problème peut venir de cet examen.

if(isset($_GET['pg'])){
    // chargement accueil
    include_once "visible/homepage.php";
}else{
    // pas sur l'accueil
    switch($_GET['pg']){

        case "galeri":
            // import de la galerie
            include_once "visible/galerie.php";
            break;
        case "liaisons":
            // import des lens
            include_once "visible/liens.php";
            break;
        case "tutorials":
            echo "tutoriels";
            // import de la page des tutoriels
            include_once "visible/tutoriels.php";
            break;
        case "contacts":
            // import de la page de contact
            include_once "visible/contact.php";
            break;
        case "administration":
            // import de l'admin
            include_once "visible/admin.php";
            break;
        case "CV":
            // import du cv
            include_once "visible/cv.php";
            break;

        default:
            // chargement de l'accueil
            include_once "visible/homepage.php";


    }
}
// si on fermer notre connexion, on le fait ici
?>

</body>
</html>
