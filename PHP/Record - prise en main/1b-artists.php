


<?php

    // on importe le contenu du fichier "db.php"
    include('1a-db.php');
    // on exécute la méthode de connexion à notre BDD
    $db = connexionBase();

    // on lance une requête pour chercher toutes les fiches d'artistes
    $requete = $db->query("SELECT * FROM artist");
    // on récupère tous les résultats trouvés dans une variable
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    // on clôt la requête en BDD
    $requete->closeCursor();

    ?>

<?php include('head.php'); ?>


<body><div class="p-3">

<?php include('header.php'); ?>

    <table>
        <tr>
            <th>ID</th>
            <th class="pl-3">NOM</th>
            <!-- Ici, on ajoute une colonne pour insérer un lien -->
            <th></th>
            
        </tr>

        <?php foreach ($tableau as $artist): ?>
        <tr>
            <td class="fw-bold"><?= $artist->artist_id ?></td>
            <td class="pl-3"><?= $artist->artist_name ?></td>
            <!-- Ici, on ajoute un lien par artiste pour accéder à sa fiche : -->
            <td><a href="1c-artist_detail.php?id=<?= $artist->artist_id ?>" class="btn bg-black text-white fw-bold m-2">Détails</a></td>
        </tr>
        <?php endforeach; ?>

    </table>
        </div>

<?php include('foot.php'); ?>

</body>
</html>

