<?php

$serveur = 'greggl74.sql.free.fr';

$login = 'greggl74';

$mot_de_passe = 'Thomas1974';

$nom_bd = 'greggl74';

if(mysql_connect($serveur, $login, $mot_de_passe)) echo "ok";

else echo "non";

mysql_select_db($nom_bd);

mysql_query("set names 'utf8'");

$sql = INSERT INTO `marques` (`id` ,`nom`) VALUES (NULL , 'greg4');



?>
