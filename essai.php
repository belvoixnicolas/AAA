<?php

###########################################
############ PDO-Extension #############
###########################################


$host_name = 'db745063290.db.1and1.com*';
$database = 'dbo745063290';
$user_name = 'dbo745063290';
$password = ' !Nicolas019';

$dbh = null;
try {
  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  echo "<p>Connexion au serveur MySQL établie avec succès via pdo.</p >";


  $dbh->exec($sql);
} catch (PDOException $e) {
  echo "Erreur!: " . $e->getMessage() . "<br/>";
  die();

}


?>
