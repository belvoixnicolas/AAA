<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voiture</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/caroussel.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/tableau_fiche.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<<<<<<< HEAD
=======

>>>>>>> 04d34f6a76fe178c1c7a211db7f5ab34477acca8
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
</head>

<body>
  <!-- NAVBAR -->
    <?php include 'include/navbar.html'; ?>
  <!-- NAVBAR -->

  <main>
    <!-- caroussel -->
    <div class="scene">
      <div class="slide_gauche" onclick="présédent();"><p><</p></div>
      <ul>
        <li id="0"><hr class="gauche"><img src="img/1.jpg"><hr class="droite"></li>
        <li id="1"><hr class="gauche"><img src="img/2.jpg"><hr class="droite"></li>
        <li id="2"><hr class="gauche"><img src="img/3.jpg"><hr class="droite"></li>
      </ul>
      <div class="slide_droite" onclick="suivent();"><p>></p></div>
    </div>
    <!-- caroussel -->


		<?php
		include 'include/connexion_dbh.php';
		?>
<?php

		$idvoiture = $_GET['id'];

		$lienidphoto = $dbh->query('SELECT lien_photo FROM photo NATURAL JOIN apourphoto WHERE id_voiture = "'.$idvoiture.'"');
		$lienidpho = $lienidphoto->fetch();
		$id_photo = $lienidpho['lien_photo'];

		$lienidmarque = $dbh->query('SELECT marque FROM marque NATURAL JOIN voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidmar = $lienidmarque->fetch();
		$id_marque = $lienidmar['marque'];

		$lienidmodele = $dbh->query('SELECT modele FROM modele NATURAL JOIN voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidmod = $lienidmodele->fetch();
		$id_modele = $lienidmod['modele'];

		$lienprix = $dbh->query('SELECT prix FROM voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidprix = $lienprix->fetch();
		$id_prix = $lienidprix['prix'];

		$lienkm = $dbh->query('SELECT km FROM voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidkm = $lienkm->fetch();
		$id_km = $lienidkm['km'];

		$lienannee = $dbh->query('SELECT ID_annee FROM voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidannee = $lienannee->fetch();
		$id_annee = $lienidannee['ID_annee'];

		$lienenergie = $dbh->query('SELECT energie FROM energie NATURAL JOIN voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidenergie = $lienenergie->fetch();
		$id_energie = $lienidenergie['energie'];

		$lienplace = $dbh->query('SELECT nbre_place FROM voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidplace = $lienplace->fetch();
		$id_nbreplace = $lienidplace['nbre_place'];

		$lienvitesse = $dbh->query('SELECT vitesse FROM vitesse NATURAL JOIN voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidvitesse = $lienvitesse->fetch();
		$id_vitesse = $lienidvitesse['vitesse'];

		$liendescription = $dbh->query('SELECT description FROM voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lieniddescription = $liendescription->fetch();
		$id_description = $lieniddescription['description'];
		?>



    <section class='info'>
      <h2><?php echo $id_marque." ".$id_modele;?></h2>
      <h3><?php echo $id_prix;?> €</h3>

      <table>
        <tr>
          <th>Marque</th>
          <td><?php echo $id_marque; ?></td>
        </tr>
        <tr>
          <th>Kilomètres</th>
          <td><?php echo $id_km; ?></td>
        </tr>
        <tr>
          <th>Année de mise en service</th>
          <td><?php echo $id_annee; ?></td>
        </tr>
        <tr>
          <th>Energie</th>
          <td><?php echo $id_energie; ?></td>
        </tr>
        <tr>
          <th>Nombre de place</th>
          <td><?php echo $id_nbreplace; ?></td>
        </tr>
        <tr>
          <th>Boite de vitesse</th>
          <td><?php echo $id_vitesse; ?></td>
        </tr>
      </table>

      <p class="description">
        <?php echo $id_description; ?>
      </p>

      <button class="contact wow animated zoomIn"><img src="img/icon/defaut.gif"><span>Essayer la</span></button>
    </section>

    <form action="#" method="post">
        <p>
          <input type="text" class="left" name="nom" placeholder="Nom" required />
          <input type="text" class="right" name="prenom" placeholder="Prénom" required />
        </p>

        <p>
          <input type="email" class="left" name="mail" placeholder="Mail" required />
          <input type="tel" class="right" name="tel" placeholder="Tel" required />
        </p>

        <p>
          <textarea name="text" placeholder="Text" required></textarea>
        </p>

        <p>
          <button class="buttonenvoyer" type="submit">
    				Submit
          </button class="buttonvendre">
        </p>
      </form>
  </main>

  <!-- FOOTER -->
    <?php include 'include/footer.html'; ?>
  <!-- FOOTER -->
    <script type="text/javascript" src="js/carousel_voiture.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script type="text/javascript">
    $('.contact').click(function() {
      $('form').animate({height: 'toggle'}, 'slow');
    });
    </script>
</body>
</html>
