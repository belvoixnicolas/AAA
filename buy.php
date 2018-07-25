<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>contact</title>
      <link rel="icon" type="image/x-icon" href="favicon.ico">
      <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="resource/img/favicon.ico" /><![endif]-->
      <link rel="stylesheet" type="text/css" href="css/reset.css">
      <link rel="stylesheet" type="text/css" href="css/nav.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/buy.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    </head>
    <body>
      <!-- NAVBAR -->
        <?php include 'include/navbar.html'; ?>
      <!-- NAVBAR -->

      <main>
        <?php
        include 'include/connexion_dbh.php';
        ?>
        <?php
        $reponse = $dbh->query('SELECT * FROM marque ORDER BY marque');
        $reponse2 = $dbh->query('SELECT * FROM vitesse ORDER BY vitesse');
        $reponse3 = $dbh->query('SELECT * FROM annee ORDER BY annee DESC');
        $reponse4 = $dbh->query('SELECT * FROM options');
        $reponse5 = $dbh->query('SELECT * FROM options');
        $reponse6 = $dbh->query('SELECT * FROM options');
        $reponse7 = $dbh->query('SELECT * FROM options');
        ?>
        <section class="filtre">
          <form action="#" method="post">
            <p class="select">
              <select id="place" name="nbreplace">
                <option value="none" disabled selected>Nombre de place</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
              </select>
            </p>

            <p class="select">
              <select id="max-prix" name="maxPrix">
                <option value="none" selected>Prix max</option>
              </select>
            </p>

            <p class="select">
              <select id="min-an" name="minAn">
                <option value="none" selected>Année min</option>
              </select>
            </p>

            <p class="select">
              <select id="max-an" name="maxAn">
                <option value="none" selected>Année max</option>
              </select>
            </p>

            <p class="select">
              <select id="min-km" name="minKm">
                <option value="none" selected>Kilomètres min</option>
              </select>
            </p>

            <p class="select">
              <select id="max-km" name="maxKm">
                <option value="none" selected>Kilomètres max</option>
              </select>
            </p>

            <p class="select">
              <select id="marque" name="marque">
              <option disabled selected>Marques</option>
              <?php while ($a = $reponse->fetch())
          { ?>
              <option value="<?php echo $a['id_marque'];?>"><?php echo $a['marque'];?></option><?php } ?>
            </select>
            </p>

            <p class="select">
              <select id="energie" name="energie">
  							<option disabled selected>Energie</option>
  							<option value="1">Essence</option>
  							<option value="2">Diesel</option>
  							<option value="3">Electrique</option>
  							<option value="4">Hybride</option>
  							<option value="5">Autre</option>
  						</select>
            </p>

            <p class="select">
              <select id="vitesse" name="vitesse">
                <option disabled selected>Boite de vitesse</option>
                <?php while ($b = $reponse2->fetch())
            { ?>
                <option value="<?php echo $b['id_vitesse'];?>"><?php echo $b['vitesse'];?></option><?php } ?>
              </select>
            </p>

            <p>
              <input type="submit" value="Valid" />
              <input type="reset" value="Reset">
            </p>
          </form>
        </section>

        <section class="liste">
          <section class="liste">

					<?php
          $searchvoiture = $dbh->query('SELECT id_voiture FROM voiture');
          while ($a = $searchvoiture->fetch())
			{
          $idvoiture = $a['id_voiture'];
          $lienidphoto = $dbh->query('SELECT lien_photo FROM photo NATURAL JOIN apourphoto WHERE id_voiture = "'.$idvoiture.'"');
          $lienidpho = $lienidphoto->fetch();
          $id_photo = $lienidpho['lien_photo'];




          ?>
					<a href="fiche_voiture.php?id=<?php echo $idvoiture;?>" class="tuile">
            <img src="<?php echo $id_photo;?>" alt="<?php echo $id_photo;?>" class="" />
            <h2>Titre</h2>

            <h3>prix</h3>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </a>

					<?php } ?>


          <a href="fiche_voiture.php" class="tuile">
            <img src="img/voiture.jpg" alt="voiture">

            <h2>Titre</h2>

            <h3>prix</h3>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </a>
        </section>
      </main>

      <!-- FOOTER -->
        <?php include 'include/footer.html'; ?>
    </body>
  </html>
