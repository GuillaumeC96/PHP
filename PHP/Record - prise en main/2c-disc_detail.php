<?php

    // On se connecte à la BDD via notre fichier db.php :
    require "2a-db.php";
    $db = connexionBase();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM disc WHERE artist_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDO - Détail</title>
    </head>
    <body>


        DETAILS<br>
        Title : <?= $myArtist->disc_title ?><br>
        Label : <?= $myArtist->disc_label ?><br>
        Year : <?= $myArtist->disc_year ?><br>
        Genre : <?= $myArtist->disc_genre ?><br>
        Picture : <?= $myArtist->disc_picture ?>

    </body>
</html>


