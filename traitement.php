<?php
$description = $_POST["description"];
$place = $_POST["nbreplace"];
$km = $_POST["km"];
$prix = $_POST["prix"];
$modele = $_POST["modele"];
$energie = $_POST["energie"];
$marque = $_POST["marque"];
$vitesse = $_POST["vitesse"];
$annee = $_POST["annee"];
$option1 = $_POST["option1"];
$option2 = $_POST["option2"];
$option3 = $_POST["option3"];
$option4 = $_POST["option4"];
$lienphoto = $_POST["lienphoto"];



  include 'include/connexion_dbh.php';

    //on insére dans la base le modele de la voiture
    $sql3 = "INSERT INTO modele (modele, id_marque)
    VALUES ('$modele','$marque')";
    $dbh->exec($sql3);
    //on recupere l'id du modele que l'on vient de créer
        $lienidmodele = $dbh->query('SELECT id_modele FROM modele WHERE modele = "'.$modele.'"');
        $lienid = $lienidmodele->fetch();
        $idmodele = $lienid['id_modele'];
    //on insére dans la table voiture la nouvelle voiture du formulaire
        $sql1 = "INSERT INTO voiture (description, nbre_place, km, prix, id_modele, id_admin, id_energie, id_marque, id_vitesse, id_annee)
        VALUES ('$description','$place','$km','$prix','$idmodele','1','$energie','$marque','$vitesse','$annee')";
        $dbh->exec($sql1);
        //on recupere l'id de la voiture nouvellement créer
        $lienidvoiture = $dbh->query('SELECT id_voiture FROM voiture WHERE description = "'.$description.'" AND km = "'.$km.'" AND prix = "'.$prix.'"');
        $lienidvoit = $lienidvoiture->fetch();
        $id_voiture = $lienidvoit['id_voiture'];
        //on insere dans la table photo le lien de la photo
        $sql4 = "INSERT INTO photo (lien_photo)
        VALUES ('$lienphoto')";
        $dbh->exec($sql4);
        //on recupere l'id de la photo nouvellement créer
        $lienidphoto = $dbh->query('SELECT id_photo FROM photo WHERE lien_photo = "'.$lienphoto.'"');
        $lienidpho = $lienidphoto->fetch();
        $id_photo = $lienidpho['id_photo'];
        //on insére dans la table apourphoto la relation id_voiture-id_photo
        $insrelapourphoto = ("INSERT INTO apourphoto (id_voiture, id_photo)
        VALUES ('$id_voiture','$id_photo')");
        $dbh->exec($insrelapourphoto);
      //si le champ option1 du formulaire n'est pas vide alors on insére dans la base la relation id_voiture-id_option1
      if (!empty($option1)) {
        $insoption1 = ("INSERT INTO acommeoption (id_voiture, id_options)
        VALUES ('$id_voiture','$option1')");
        $dbh->exec($insoption1);
    }
    else {
      //sinon (si il est vide) on ne fait rien
    }
    //si le champ option2 du formulaire n'est pas vide alors on insére dans la base la relation id_voiture-id_option2
    if (!empty($option2)) {
      $insoption2 = ("INSERT INTO acommeoption (id_voiture, id_options)
      VALUES ('$id_voiture','$option2')");
      $dbh->exec($insoption2);
    }
    else {
    }
    //si le champ option3 du formulaire n'est pas vide alors on insére dans la base la relation id_voiture-id_option3
    if (!empty($option3)) {
      $insoption3 = ("INSERT INTO acommeoption (id_voiture, id_options)
      VALUES ('$id_voiture','$option3')");
      $dbh->exec($insoption3);
    }
    else {
    }
    //si le champ option4 du formulaire n'est pas vide alors on insére dans la base la relation id_voiture-id_option4
    if (!empty($option4)) {
      $insoption4 = ("INSERT INTO acommeoption (id_voiture, id_options)
      VALUES ('$id_voiture','$option4')");
      $dbh->exec($insoption4);
    }
    else {
    }
    echo "New record created successfully";


$dbh = null;
?>
