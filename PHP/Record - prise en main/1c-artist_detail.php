

<?php

    // On se connecte à la BDD via notre fichier db.php :
    require "1a-db.php";
    $db = connexionBase();

    // On récupère l'ID passé en paramètre :
    $id = $_GET["id"];

    // On crée une requête préparée avec condition de recherche :
    $requete = $db->prepare("SELECT * FROM artist WHERE artist_id=?");
    // on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
    $requete->execute(array($id));

    // on récupère le 1e (et seul) résultat :
    $myArtist = $requete->fetch(PDO::FETCH_OBJ);

    // on clôt la requête en BDD
    $requete->closeCursor();

?>

<?php include('head.php'); ?>

    <body>
        Artiste N°<?php echo $myArtist->artist_id ?><br>
        Nom de l'artiste : <?= $myArtist->artist_name ?><br>
        Site Internet : <?= $myArtist->artist_url ?>


<?php include('foot.php'); ?>

</body>
</html>
