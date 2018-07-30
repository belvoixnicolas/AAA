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
		while ($a = $searchvoiture->fetch())
		{
		$idvoiture = $a['id_voiture'];
		$idmodele = $a['id_modele'];
		$idprix = $a['prix'];
		$iddescription = $a['description'];
		$lienidphoto = $dbh->query('SELECT lien_photo FROM photo NATURAL JOIN apourphoto WHERE id_voiture = "'.$idvoiture.'"');
		$lienidpho = $lienidphoto->fetch();
		$id_photo = $lienidpho['lien_photo'];

		$lienidmarque = $dbh->query('SELECT marque FROM marque NATURAL JOIN voiture WHERE id_voiture = "'.$idvoiture.'"');
		$lienidmar = $lienidmarque->fetch();
		$id_marque = $lienidmar['marque'];

		$lienidmodele = $dbh->query('SELECT modele FROM modele WHERE id_modele = "'.$idmodele.'"');
		$lienidmod = $lienidmodele->fetch();
		$id_modele = $lienidmod['modele'];
		?>
		<a href="fiche_voiture.php?id=<?php echo $idvoiture;?>" class="tuile">
			<img src="<?php echo $id_photo;?>" alt="<?php echo $id_photo;?>" class="" />
			<h2><?php echo $id_marque." ".$id_modele;?></h2>

			<h3><?php echo $idprix;?> €</h3>

			<p>
				<?php echo $iddescription;?>
			</p>
		</a>

		<?php } ?>




    <section class='info'>
      <h2>Titre</h2>
      <h3>Prix</h3>

      <table>
        <tr>
          <th>Marque</th>
          <td>Oppel</td>
        </tr>
        <tr>
          <th>Kilomètres</th>
          <td>1988547454 Km</td>
        </tr>
        <tr>
          <th>Année de mise en service</th>
          <td>1950</td>
        </tr>
        <tr>
          <th>Energie</th>
          <td>Huille de patate</td>
        </tr>
        <tr>
          <th>Nombre de place</th>
          <td>1/2 Place</td>
        </tr>
        <tr>
          <th>Boite de vitesse</th>
          <td>Manuelle</td>
        </tr>
      </table>

      <p class="description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, reiciendis nesciunt repudiandae officia inventore, esse saepe
        illum quidem nisi officiis iusto ex corporis, velit dicta voluptatem voluptatibus doloribus accusantium veritatis!
      </p>

      <button><img src="img/icon/defaut.gif"><span>Essayer la</span></button>
    </section>
  </main>

  <!-- FOOTER -->
    <?php include 'include/footer.html'; ?>
  <!-- FOOTER -->
		<script type="text/javascript" src="js/carousel_voiture.js"></script>
</body>
</html>
