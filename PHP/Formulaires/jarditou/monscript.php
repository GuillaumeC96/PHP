
<?php

echo "Nom : ".$_REQUEST["nom"]."<br>";
echo "Prenom : ".$_REQUEST["prenom"]."<br>";
foreach ($_REQUEST["Fsexe"] as $sexe){ 
    echo "Civilité : ".$sexe."<br>"; 
}

echo "Naissance : ".$_REQUEST["naissance"]."<br>";
echo "Code postal : ".$_REQUEST["postal"]."<br>";
echo "Adresse : ".$_REQUEST["adresse"]."<br>";
echo "Ville : ".$_REQUEST["ville"]."<br>";
echo "Email : ".$_REQUEST["email"]."<br>";
echo "Sujet : ".$_REQUEST["sujet"]."<br>";
echo "Question : ".$_REQUEST["question"]."<br>";
echo "Controle : ".$_REQUEST["case"]."<br>";

?>
