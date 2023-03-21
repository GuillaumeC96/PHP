/*Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...*/

<html>
    <body>
        <?php
            $a = 1;
            
            while ($a<150) {

            	if ($a%2) {
            		echo $a;
            	}
            	
            	$a++;
            	
            }
            
        ?>
    


/*Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers*/

<html>
    <body>
        <?php
            $a = 1;
            
            while ($a<=500) {
            	
            	echo "Je dois faire des sauvegardes régulières de mes fichiers";
            	
            	$a++;
            	
            }
            
        ?>
    



/*Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML. Le résultat doit être le suivant : */


<?php
function table($nbr, $nbr2)
{
 
$table = '<table border="2">';

for ($t=-1; $t <= $nbr; $t++) {
if($t==-1){$table .= '<td></td>';}else{$table .= '<td><b>'.$t.'<b></td>';}
}

for ($a=0; $a <= $nbr; $a++) {
$table .= '<tr>';
for ($b=1; $b <= $nbr2+2 ; $b++) {
    $d = $b;
    if($b==2){$d=0;}
    if($b>2){$d=$b-2;}

if($b==1){$table .= '<td><b>'.$a*$d.'<b></td>';}else{$table .= '<td>'.$a*$d.'</td>';}
}
$table .= '</tr>';
}
$table .= '</table>';
return $table;
}
echo table(12, 12);
?>



/*1. Mois de l'année non bissextile

Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.

Utilisez le nom des mois comme clés de votre tableau associatif.

Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.

Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.*/


<?php>
$jourMois = array("janvier"=>31,"février" =>28, "mars"=>31, "avril" => 30,"mai" => 31,
"juin" =>30, "juillet" => 31,"août" =>31, "septembre"=> 30, "octobre" =>31,
"novembre" =>30, "décembre"=> 31);
echo"<table><tr><th>Mois</th><th>Nombre de jours </th></tr>"."\n";
foreach($jourMois as $mois => $nbrjour)
echo"<tr><td>". $mois . "</td><td>". $nbrjour . "</td></tr>\n";

echo"</table>";
?>


/*2. Capitales
A partir du tableau ci-dessus:
    1. Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.*/


<?php
$capitales = array(
"Bucarest" => "Roumanie",
"Bruxelles" => "Belgique",
"Oslo" => "Norvège",
"Ottawa" => "Canada",
"Paris" => "France",
"Port-au-Prince" => "Haïti",
"Port-d'Espagne" => "Trinité-et-Tobago",
"Prague" => "République tchèque",
"Rabat" => "Maroc",
"Riga" => "Lettonie",
"Rome" => "Italie",
"San José" => "Costa Rica",
"Santiago" => "Chili",
"Sofia" => "Bulgarie",
"Alger" => "Algérie",
"Amsterdam" => "Pays-Bas",
"Andorre-la-Vieille" => "Andorre",
"Asuncion" => "Paraguay",
"Athènes" => "Grèce",
"Bagdad" => "Irak",
"Bamako" => "Mali",
"Berlin" => "Allemagne",
"Bogota" => "Colombie",
"Brasilia" => "Brésil",
"Bratislava" => "Slovaquie",
"Varsovie" => "Pologne",
"Budapest" => "Hongrie",
"Le Caire" => "Egypte",
"Canberra" => "Australie",
"Caracas" => "Venezuela",
"Jakarta" => "Indonésie",
"Kiev" => "Ukraine",
"Kigali" => "Rwanda",
"Kingston" => "Jamaïque",
"Lima" => "Pérou",
"Londres" => "Royaume-Uni",
"Madrid" => "Espagne",
"Malé" => "Maldives",
"Mexico" => "Mexique",
"Minsk" => "Biélorussie",
"Moscou" => "Russie",
"Nairobi" => "Kenya",
"New Delhi" => "Inde",
"Stockholm" => "Suède",
"Téhéran" => "Iran",
"Tokyo" => "Japon",
"Tunis" => "Tunisie",
"Copenhague" => "Danemark",
"Dakar" => "Sénégal",
"Damas" => "Syrie",
"Dublin" => "Irlande",
"Erevan" => "Arménie",
"La Havane" => "Cuba",
"Helsinki" => "Finlande",
"Islamabad" => "Pakistan",
"Vienne" => "Autriche",
"Vilnius" => "Lituanie",
"Zagreb" => "Croatie");
ksort($capitales);
echo"<table><tr><th>Capitales</th><th>Pays</th></tr>"."\n";
foreach($capitales as $nompays => $capitales)
echo"<tr><td>". $nompays . "</td><td>". $capitales . "</td></tr>\n";
echo"</table>";
?>



/*2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.*/


<?php
$nompays = array (
"Bucarest" => "Roumanie",
"Bruxelles" => "Belgique",
"Oslo" => "Norvège",
"Ottawa" => "Canada",
"Paris" => "France",
"Port-au-Prince" => "Haïti",
"Port-d'Espagne" => "Trinité-et-Tobago",
"Prague" => "République tchèque",
"Rabat" => "Maroc",
"Riga" => "Lettonie",
"Rome" => "Italie",
"San José" => "Costa Rica",
"Santiago" => "Chili",
"Sofia" => "Bulgarie",
"Alger" => "Algérie",
"Amsterdam" => "Pays-Bas",
"Andorre-la-Vieille" => "Andorre",
"Asuncion" => "Paraguay",
"Athènes" => "Grèce",
"Bagdad" => "Irak",
"Bamako" => "Mali",
"Berlin" => "Allemagne",
"Bogota" => "Colombie",
"Brasilia" => "Brésil",
"Bratislava" => "Slovaquie",
"Varsovie" => "Pologne",
"Budapest" => "Hongrie",
"Le Caire" => "Egypte",
"Canberra" => "Australie",
"Caracas" => "Venezuela",
"Jakarta" => "Indonésie",
"Kiev" => "Ukraine",
"Kigali" => "Rwanda",
"Kingston" => "Jamaïque",
"Lima" => "Pérou",
"Londres" => "Royaume-Uni",
"Madrid" => "Espagne",
"Malé" => "Maldives",
"Mexico" => "Mexique",
"Minsk" => "Biélorussie",
"Moscou" => "Russie",
"Nairobi" => "Kenya",
"New Delhi" => "Inde",
"Stockholm" => "Suède",
"Téhéran" => "Iran",
"Tokyo" => "Japon",
"Tunis" => "Tunisie",
"Copenhague" => "Danemark",
"Dakar" => "Sénégal",
"Damas" => "Syrie",
"Dublin" => "Irlande",
"Erevan" => "Arménie",
"La Havane" => "Cuba",
"Helsinki" => "Finlande",
"Islamabad" => "Pakistan",
"Vienne" => "Autriche",
"Vilnius" => "Lituanie",
"Zagreb" => "Croatie");
asort($nompays);
echo"<table><tr><th>Pays</th><th>Capitales</th></tr>"."\n";
foreach($nompays as $capitales => $nompays)
echo"<tr><td>". $nompays . "</td><td>". $capitales . "</td></tr>\n";
echo"</table>";
?>



/*3. Affichez le nombre de pays dans le tableau.*/



<?php
$nompays = array (
"Bucarest" => "Roumanie",
"Bruxelles" => "Belgique",
"Oslo" => "Norvège",
"Ottawa" => "Canada",
"Paris" => "France",
"Port-au-Prince" => "Haïti",
"Port-d'Espagne" => "Trinité-et-Tobago",
"Prague" => "République tchèque",
"Rabat" => "Maroc",
"Riga" => "Lettonie",
"Rome" => "Italie",
"San José" => "Costa Rica",
"Santiago" => "Chili",
"Sofia" => "Bulgarie",
"Alger" => "Algérie",
"Amsterdam" => "Pays-Bas",
"Andorre-la-Vieille" => "Andorre",
"Asuncion" => "Paraguay",
"Athènes" => "Grèce",
"Bagdad" => "Irak",
"Bamako" => "Mali",
"Berlin" => "Allemagne",
"Bogota" => "Colombie",
"Brasilia" => "Brésil",
"Bratislava" => "Slovaquie",
"Varsovie" => "Pologne",
"Budapest" => "Hongrie",
"Le Caire" => "Egypte",
"Canberra" => "Australie",
"Caracas" => "Venezuela",
"Jakarta" => "Indonésie",
"Kiev" => "Ukraine",
"Kigali" => "Rwanda",
"Kingston" => "Jamaïque",
"Lima" => "Pérou",
"Londres" => "Royaume-Uni",
"Madrid" => "Espagne",
"Malé" => "Maldives",
"Mexico" => "Mexique",
"Minsk" => "Biélorussie",
"Moscou" => "Russie",
"Nairobi" => "Kenya",
"New Delhi" => "Inde",
"Stockholm" => "Suède",
"Téhéran" => "Iran",
"Tokyo" => "Japon",
"Tunis" => "Tunisie",
"Copenhague" => "Danemark",
"Dakar" => "Sénégal",
"Damas" => "Syrie",
"Dublin" => "Irlande",
"Erevan" => "Arménie",
"La Havane" => "Cuba",
"Helsinki" => "Finlande",
"Islamabad" => "Pakistan",
"Vienne" => "Autriche",
"Vilnius" => "Lituanie",
"Zagreb" => "Croatie");
asort($nompays);
echo "Nombre de pays =".count($nompays);
echo"<table><tr><th>Pays</th><th>Capitales</th></tr>"."\n";
foreach($nompays as $capitales => $nompays)
echo"<tr><td>". $nompays . "</td><td>". $capitales . "</td></tr>\n";
echo"</table>";

?>



/*4. Supprimer du tableau toutes les capitales commençant par la lettre 'B', puis affichez le contenu du tableau.*/


<?php
$nompays = array (
"Bucarest" => "Roumanie",
"Bruxelles" => "Belgique",
"Oslo" => "Norvège",
"Ottawa" => "Canada",
"Paris" => "France",
"Port-au-Prince" => "Haïti",
"Port-d'Espagne" => "Trinité-et-Tobago",
"Prague" => "République tchèque",
"Rabat" => "Maroc",
"Riga" => "Lettonie",
"Rome" => "Italie",
"San José" => "Costa Rica",
"Santiago" => "Chili",
"Sofia" => "Bulgarie",
"Alger" => "Algérie",
"Amsterdam" => "Pays-Bas",
"Andorre-la-Vieille" => "Andorre",
"Asuncion" => "Paraguay",
"Athènes" => "Grèce",
"Bagdad" => "Irak",
"Bamako" => "Mali",
"Berlin" => "Allemagne",
"Bogota" => "Colombie",
"Brasilia" => "Brésil",
"Bratislava" => "Slovaquie",
"Varsovie" => "Pologne",
"Budapest" => "Hongrie",
"Le Caire" => "Egypte",
"Canberra" => "Australie",
"Caracas" => "Venezuela",
"Jakarta" => "Indonésie",
"Kiev" => "Ukraine",
"Kigali" => "Rwanda",
"Kingston" => "Jamaïque",
"Lima" => "Pérou",
"Londres" => "Royaume-Uni",
"Madrid" => "Espagne",
"Malé" => "Maldives",
"Mexico" => "Mexique",
"Minsk" => "Biélorussie",
"Moscou" => "Russie",
"Nairobi" => "Kenya",
"New Delhi" => "Inde",
"Stockholm" => "Suède",
"Téhéran" => "Iran",
"Tokyo" => "Japon",
"Tunis" => "Tunisie",
"Copenhague" => "Danemark",
"Dakar" => "Sénégal",
"Damas" => "Syrie",
"Dublin" => "Irlande",
"Erevan" => "Arménie",
"La Havane" => "Cuba",
"Helsinki" => "Finlande",
"Islamabad" => "Pakistan",
"Vienne" => "Autriche",
"Vilnius" => "Lituanie",
"Zagreb" => "Croatie");


asort($nompays);
echo "Nombre de pays =".count($nompays);

$nb = count($nompays);
for(i = 1; i<=$nb; i++){


}





echo"<table><tr><th>Pays</th><th>Capitales</th></tr>"."\n";
foreach($nompays as $capitales => $nompays)
echo"<tr><td>". $nompays . "</td><td>". $capitales . "</td></tr>\n";
echo"</table>";


?>






/*4.Supprimer du tableau toutes les capitales commençant par la lettre 'B', puis affichez le contenu du tableau.*/



<?php



$pays = array (
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"); 


     // Lecture de chaque lignes du tableau
    foreach($pays as $cle=>$valeur){
        if(substr($cle,0,1)=="B"){unset($cle);} else {echo $cle.' : '.$valeur.'<br>';}
     }



?>




/*3. Departements
1.Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements*/


<?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

ksort($departements);

     // Lecture de chaque lignes du tableau
    foreach($departements as $cle=>$valeur){
       echo $cle." : ".implode(", ",$valeur)."<br>";
     }



?>


/*2.Affichez la liste des régions suivie du nombre de départements*/


<?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);

ksort($departements);

     // Lecture de chaque lignes du tableau
    foreach($departements as $cle=>$valeur){
       echo $cle." : ".count($valeur)." départements <br>";
     }



?>



/*LES FONCTIONS

Ecrivez une fonction qui permette de générer un lien.*/

<?php

function createlien($lien,$titre){
    $bouton = "<a href= $lien > $titre </a>";
    echo $bouton;
}

createlien("https://www.reddit.com/", "Reddit Hug");


?>

/*Ecrivez une fonction qui calcul la somme des valeurs d'un tableau*/

<?php
$tab = array(4, 3, 8, 2);

function somme($table){
    return array_sum($table);
}

$resultat = somme($tab);
echo $resultat;
?>


/*Créer une fonction qui vérifie le niveau de complexité d'un mot de passe*/

<?php
$entry = "TopSecret42";
function valide($pass){

$passlen = strlen($pass);

$NBR = array(1,2,3,4,5,6,7,8,9);
$replaceNBR = str_replace($NBR,"",$pass);
$replacelenNBR = strlen($replaceNBR);
$NBRbool = $replacelenNBR < $passlen;

$replaceMAJ = preg_replace('#[A-Z]*#', '',$pass);
$replacelenMAJ = strlen($replaceMAJ);
$MAJbool = $replacelenMAJ < $passlen;

$replaceMIN = preg_replace('#[a-z]*#', '',$pass);
$replacelenMIN = strlen($replaceMIN);
$MINbool = $replacelenMIN < $passlen;

if($NBRbool ==true && $MAJbool==true && $MINbool==true){return true;}
}

echo valide($entry);
?>


/*Trouvez le numéro de semaine de la date suivante : 14/07/2019.*/

<?php
$date = "2019-07-14";
$format = strtotime ($date);
echo date('W',$format);
?>

/*Combien reste-t-il de jours avant la fin de votre formation ?*/

<?php
$origin = date_create('2023-02-28');
$target = date_create('2023-04-03');
$interval = date_diff($origin, $target);
echo $interval->format('%a jours');
?>

/*Comment déterminer si une année est bissextile ?*/

<?php
$an = 2023;
$mod4= $an%4;
$mod100= $an%100;
$bis="";
if($mod4==0 && $mod100!==0){$bis="$an est bissextile";}else{$bis="$an est non bissextile";}
echo $bis;
?>

/*Montrez que la date du 32/17/2019 est erronée.*/

<?php
function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

if(validateDate('2019-17-32', 'Y-m-d')==true){echo "La date est valide";}
else{echo "La date n'est pas valide";}
?>

/*Affichez l'heure courante sous cette forme : 11h25.*/

<?php
date_default_timezone_set('Europe/Paris');
$date = date('h')."h".date('i');
echo $date;
?>

/*Ajoutez 1 mois à la date courante.*/

<?php
echo date('d-m-y',strtotime('+1 month',time()));
?>

/*Que s'est-il passé le 1000200000 ?*/

<?php
echo date('d-m-y',1000200000);
?>





