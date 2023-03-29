

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

    <body><div class="p-3">

    <?php include('header.php'); ?>

    <h1>Détails de l'artiste</h1>

      <p class="fw-bold p-1">Artiste N°<?php echo $myArtist->artist_id ?></p>
      <p class="fw-bold p-1">Nom de l'artiste : <?= $myArtist->artist_name ?></p>
      <p class="fw-bold p-1">Site Internet : <?= $myArtist->artist_url ?></p>

      </div>
<?php include('foot.php'); ?>

</body>
</html>
