<?php
$nom = $_POST["nom"];
$places = $_POST["nbreplace"];
$km = $_POST["km"];
$modele = $_POST["modele"];
$energie = $_POST["energie"];
$marques = $_POST["marques"];
$vitesse = $_POST["vitesse"];
$annee = $_POST["annee"];





$serveur = 'greggl74.sql.free.fr';

$login = 'greggl74';

$mot_de_passe = 'Thomas1974';

$nom_bd = 'greggl74';



try {
    $conn = new PDO("mysql:host=$serveur;dbname=$nom_bd", $login, $mot_de_passe);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql1 = "INSERT INTO voitures (nom, nbre_place, km)
    VALUES ('$nom','$places','$km')";
    $sql2 = "INSERT INTO energie (nom)
    VALUES ('$energie')";
    $sql3 = "INSERT INTO marques (nom)
    VALUES ('$marques')";
    $sql4 = "INSERT INTO modele (nom)
    VALUES ('$modele')";
    $sql5 = "INSERT INTO vitesse (nom)
    VALUES ('$vitesse')";
    // use exec() because no results are returned
    $conn->exec($sql1);
    $conn->exec($sql2);
    $conn->exec($sql3);
    $conn->exec($sql4);
    $conn->exec($sql5);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
