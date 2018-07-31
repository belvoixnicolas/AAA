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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
        $reponse8 = $dbh->query('SELECT * FROM annee ORDER BY annee DESC');
        ?>
        <section class="filtre">
          <form action="#" method="post">

            <p class="select">
              <select id="min-prix" name="minPrix" onchange="this.form.submit()">
                <option value="none" disabled selected>Prix min</option>
                <option value="0">0</option>
                <option value="2000">2000</option>
                <option value="5000">5000</option>
                <option value="7500">7500</option>
                <option value="10000">10000</option>
                <option value="15000">15000</option>
                <option value="20000">20000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                <option value="75000">75000</option>
                <option value="100000">100000</option>
                <option value="150000">150000</option>
              </select>
            </p>

            <p class="select">
              <select id="max-prix" name="maxPrix" onchange="this.form.submit()">
                <option value="none" disabled selected>Prix max</option>
                <option value="0">0</option>
                <option value="2000">2000</option>
                <option value="5000">5000</option>
                <option value="7500">7500</option>
                <option value="10000">10000</option>
                <option value="15000">15000</option>
                <option value="20000">20000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                <option value="75000">75000</option>
                <option value="100000">100000</option>
                <option value="150000">150000</option>
              </select>
            </p>

            <p class="select">
              <select id="min-an" name="minAn" onchange="this.form.submit()">
                <option value="none" disabled selected>Année min</option>
                <?php while ($a = $reponse3->fetch())
            { ?>
                <option value="<?php echo $a['ID_annee'];?>"><?php echo $a['annee'];?></option><?php } ?>
              </select>
            </p>

            <p class="select">
              <select id="max-an" name="maxAn" onchange="this.form.submit()">
                <option value="none" disabled selected>Année max</option>
                <?php while ($a = $reponse8->fetch())
            { ?>
                <option value="<?php echo $a['ID_annee'];?>"><?php echo $a['annee'];?></option><?php } ?>
              </select>
            </p>

            <p class="select">
              <select id="min-km" name="minKm" onchange="this.form.submit()">
                <option value="none" disabled selected>Kilomètres min</option>
                <option value="10000">10000</option>
                <option value="20000">20000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                <option value="60000">60000</option>
                <option value="70000">70000</option>
                <option value="80000">80000</option>
                <option value="90000">90000</option>
                <option value="100000">100000</option>
                <option value="120000">120000</option>
                <option value="150000">150000</option>
                <option value="200000">200000</option>

              </select>
            </p>

            <p class="select">
              <select id="max-km" name="maxKm" onchange="this.form.submit()">
                <option value="none" disabled selected>Kilomètres max</option>
                <option value="10000">10000</option>
                <option value="20000">20000</option>
                <option value="30000">30000</option>
                <option value="40000">40000</option>
                <option value="50000">50000</option>
                <option value="60000">60000</option>
                <option value="70000">70000</option>
                <option value="80000">80000</option>
                <option value="90000">90000</option>
                <option value="100000">100000</option>
                <option value="120000">120000</option>
                <option value="150000">150000</option>
                <option value="200000">200000</option>
              </select>
            </p>

            <p class="select">
              <select id="place" name="nbreplace" onchange="this.form.submit()">
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
              <select id="marque" name="marque" onchange="this.form.submit()">
              <option disabled selected>Marques</option>
              <?php while ($a = $reponse->fetch())
          { ?>
              <option value="<?php echo $a['id_marque'];?>"><?php echo $a['marque'];?></option><?php } ?>
            </select>
            </p>

            <p class="select">
              <select id="energie" name="energie" onchange="this.form.submit()">
                <option disabled selected>Energie</option>
                <option value="1">Essence</option>
                <option value="2">Diesel</option>
                <option value="3">Electrique</option>
                <option value="4">Hybride</option>
                <option value="5">Autre</option>
              </select>
            </p>

            <p class="select">
              <select id="vitesse" name="vitesse" onchange="this.form.submit()">
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

          <?php

          $query = 'SELECT id_voiture,id_modele,prix,description,ID_annee FROM voiture
  WHERE 1=1';


      if(!empty($_POST['minPrix']))
      {
      $query .= ' AND prix >= \'' .$_POST['minPrix']. '\'';
      }

      if(!empty($_POST['maxPrix']))
      {
      $query .= ' AND prix <= \'' .$_POST['maxPrix']. '\'';
      }

      if(!empty($_POST['minAn']))
      {
      $query .= ' AND ID_annee >= \'' .$_POST['minAn']. '\'';
      }

      if(!empty($_POST['maxAn']))
      {
      $query .= ' AND ID_annee <= \'' .$_POST['maxAn']. '\'';
      }

      if(!empty($_POST['minKm']))
      {
      $query .= ' AND km >= \'' .$_POST['minKm']. '\'';
      }

      if(!empty($_POST['maxKm']))
      {
      $query .= ' AND km <= \'' .$_POST['maxKm']. '\'';
      }
      if(!empty($_POST['nbreplace']))
      {
          $query .= ' AND nbre_place = \'' .$_POST['nbreplace']. '\'';
      }


      if(!empty($_POST['marque']))
      {
          $query .= ' AND id_marque = \'' .$_POST['marque']. '\'';
      }

      if(!empty($_POST['energie']))
      {
          $query .= ' AND id_energie = \'' .$_POST['energie']. '\'';
      }

      if(!empty($_POST['vitesse']))
      {
          $query .= ' AND id_vitesse = \'' .$_POST['vitesse']. '\'';
      }




$searchvoiture = $dbh->query($query);


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
					<a href="fiche_voiture.php?id=<?php echo $idvoiture;?>" class="tuile wow animated zoomIn">
            <img src="<?php echo $id_photo;?>" alt="<?php echo $id_photo;?>" class="" />
            <h2><?php echo $id_marque." ".$id_modele;?></h2>

            <h3><?php echo $idprix;?> €</h3>

            <p>
              <?php echo $iddescription;?>
            </p>
          </a>

					<?php } ?>



        </section>
      </main>

      <!-- FOOTER -->
        <?php include 'include/footer.html'; ?>
        <?php function filtre1() {

        }?>
        <script src="js/wow.min.js"></script>
        <script>
          new WOW().init();

        </script>
    </body>
  </html>
