<?php


// on importe le contenu du fichier "db.php"
include('2a-db.php');
// on exécute la méthode de connexion à notre BDD
$db = connexionBase();
// on lance une requête pour chercher toutes les fiches d'disces
$requete = $db->query("SELECT * FROM disc JOIN artist ON disc.artist_id=artist.artist_id");
// on récupère tous les résultats trouvés dans une variable
$tableau = $requete->fetchAll(PDO::FETCH_OBJ);
// on clôt la requête en BDD
$requete->closeCursor();
//compter les lignes du tableau
$nb = "Liste des disques (" . count($tableau) . ")";


?>

<?php include ('head.php'); ?>

<body><div class="p-3">

<?php include('header.php'); ?>

    <div class="d-flex mx-6 my-2 justify-content-between">
        <div>
            <h1 class="px-5">
                <?= $nb ?>
            </h1>
        </div>
        <div>
            <a href="2d-disc_new.php?>" class="btn bg-black text-danger fw-bold my-4">Ajouter</a>
        </div>
    </div>


    <div class="row px-3">

        <?php foreach ($tableau as $disc): ?>
            <div class="col-6 mx-6">

                <div class="d-flex mx-6 my-2" style="height: 265px;">

                    <div>
                        <img class="p-3" style="height: 265px" src="./jaquettes/<?= $disc->disc_picture ?>">
                    </div>

                    <div class="p-3" style="height: 265px">
                        <a class="font-weight-bold">
                            <?= $disc->disc_title ?>
                        </a><br>
                        <a class="font-weight-bold">
                            <?= $disc->artist_name ?>
                        </a><br>
                        <a class="font-weight-bold">Label :</a>
                        <?= $disc->disc_label ?><br>
                        <a class="font-weight-bold">Year :</a>
                        <?= $disc->disc_year ?><br>
                        <a class="font-weight-bold">Genre :</a>
                        <?= $disc->disc_genre ?><br>


                        <a href="2c-disc_detail.php?id=<?= $disc->disc_id ?>"
                            class="btn bg-black text-white fw-bold my-4">Détails</a>


                    </div>
                </div>

            </div>
        <?php endforeach; ?>

    </div>


    </div>
<?php include('foot.php'); ?>

</body>
</html>