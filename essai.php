<?php

$serveur = 'greggl74.sql.free.fr';

$login = 'greggl74';

$mot_de_passe = 'Thomas1974';

$nom_bd = 'greggl74';



try {
    $conn = new PDO("mysql:host=$serveur;dbname=$nom_bd", $login, $mot_de_passe);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO marques (nom)
    VALUES ('testpdo')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
