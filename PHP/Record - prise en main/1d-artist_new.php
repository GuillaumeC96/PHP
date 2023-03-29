<!DOCTYPE html>
<?php include('head.php'); ?>
<body><div class="p-3">

<?php include('header.php'); ?>

    <h1>Saisie d'un nouvel artiste</h1>

    <a href="1b-artists.php" class="btn bg-black text-white fw-bold my-4">Retour à la liste des artistes</a>

    <br>
    <br>

    <form action ="1e-script_artist_ajout.php" method="post">

        <label for="nom_for_label">Nom de l'artiste :</label><br>
        <input type="text" name="nom" id="nom_for_label">
        <br><br>

        <label for="url_for_label">Adresse site internet :</label><br>
        <input type="text" name="url" id="url_for_label">
        <br><br>

        <input type="submit" value="Ajouter" class="btn bg-black text-white fw-bold my-4">

    </form>
    </div>
    <?php include('foot.php'); ?>
</body>
</html>

