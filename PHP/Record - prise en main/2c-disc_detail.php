<?php

// On se connecte à la BDD via notre fichier db.php :
require "2a-db.php";
$db = connexionBase();

// On récupère l'ID passé en paramètre :
$id = $_GET["id"];

// On crée une requête préparée avec condition de recherche :
$requete = $db->prepare(
    "SELECT * 
    FROM disc
    JOIN artist ON disc.artist_id=artist.artist_id
    WHERE disc.disc_id=?"
);

// on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
$requete->execute(array($id));

// on récupère le (et seul) résultat :
$myArtist = $requete->fetch(PDO::FETCH_OBJ);

// on clôt la requête en BDD
$requete->closeCursor();



?>



<?php include ('head.php'); ?>

<body class="p-5">

    <h1>Détails</h1>

    <a href="2b-disc.php" class="btn bg-primary text-white my-4">Retour aux disques</a>
    <br>
    <br>

    <form action="2h-script_disc_delete.php" method="post" enctype="multipart/form-data">

        <div class="d-flex">
            <div>


                <label for="titre_disque">Titre du disque :</label><br>
                <input disabled type="text" name="titre_disque" id="titre_disque" value="<?= $myArtist->disc_title ?>">
                <br><br>

                <label for="annee_disque">Année du disque :</label><br>
                <input disabled type="number" name="annee_disque" id="annee_disque" value="<?= $myArtist->disc_year ?>">
                <br><br>

                <label for="label_disque">Label du disque :</label><br>
                <input disabled type="text" name="label_disque" id="label_disque" value="<?= $myArtist->disc_label ?>">
                <br><br>

                <label for="photo">Image du disque :</label><br>
                <img src="../jaquettes/<?= $myArtist->disc_picture ?>" alt="<?= $myArtist->disc_picture ?>" />
                <br><br>

                <input type="hidden" name="hidden" id="hidden" value="<?= $myArtist->disc_id ?>">
            </div>

            <div>

                <label for="nom_artiste">Nom de l'artiste :</label><br>
                <input disabled type="text" name="nom_artiste" id="nom_artiste" value="<?= $myArtist->artist_name ?>">
                <br><br>


                <label for="genre_disque">Genre du disque :</label><br>
                <input disabled type="text" name="genre_disque" id="genre_disque" value="<?= $myArtist->disc_genre ?>">
                <br><br>

                <label for="prix_disque">Prix du disque :</label><br>
                <input disabled type="number" name="prix_disque" id="prix_disque" value="<?= $myArtist->disc_price ?>">
                <br><br>

            </div>
        </div>

        <a href="2f-modification_disc.php?id=<?= $myArtist->disc_id ?>" class="btn bg-primary text-white my-4">Modifier</a>
        <input type="submit" value="Supprimer" class="btn bg-primary text-white my-4">
        <a href="2b-disc.php" class="btn bg-primary text-white my-4">Modifier</a>


    </form>


<?php include('foot.php'); ?>

</body>
</html>