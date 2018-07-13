<?php
try
{
	$bdd = new PDO('mysql:host=db745063290.db.1and1.com;dbname=db745063290;charset=utf8', 'db745063290', ' !Nicolas019');
echo('Connexiion reussie')
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
