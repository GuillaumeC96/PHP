<?php


// On se connecte à la BDD via notre fichier db.php :
require "2a-db.php";
$db = connexionBase();

// On récupère l'ID passé en paramètre :

$id = $_POST["hidden"];

// On crée une requête préparée avec condition de recherche :
$requete2 = $db->prepare(
    "DELETE
    FROM disc
    WHERE disc.disc_id=?"
);

// on ajoute l'ID du disque passé dans l'URL en paramètre et on exécute :
$requete2->execute(array($id));

// on récupère le (et seul) résultat :
$myArtist2 = $requete2->fetch(PDO::FETCH_OBJ);

// on clôt la requête en BDD
$requete2->closeCursor();

header("Location: 2b-disc.php");



?>