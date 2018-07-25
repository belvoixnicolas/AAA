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
      <link rel="stylesheet" type="text/css" href="css/contact.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
      <!-- navbar -->
      <?php include 'include/navbar.html';?>
      <!-- navbar -->

      <main>
        <?php




  $reponse = $dbh->query('SELECT * FROM marque ORDER BY marque');
  $reponse2 = $dbh->query('SELECT * FROM vitesse ORDER BY vitesse');
  $reponse3 = $dbh->query('SELECT * FROM annee ORDER BY annee DESC');
  $reponse4 = $dbh->query('SELECT * FROM options');
  $reponse5 = $dbh->query('SELECT * FROM options');
  $reponse6 = $dbh->query('SELECT * FROM options');
  $reponse7 = $dbh->query('SELECT * FROM options');
  ?>


        <section>

          <div class="fomfram">
            <form action="traitement.php" method="post">
                  <h3>AJOUTER UN VEHICULE</h3>
                <select id="nbreplace" name="nbreplace">
							<option disabled selected>Nbre places</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
              <option value="9">9</option>
							<option value="10">10</option>
						</select>

                <input type="text" class="left" name="km" placeholder="km" required />
                <input type="text" class="left" name="prix" placeholder="prix" required />
                <input type="text" class="left" name="modele" placeholder="modele" required />

            <select id="energie" name="energie">
							<option disabled selected>Energie</option>
							<option value="1">Essence</option>
							<option value="2">Diesel</option>
							<option value="3">Electrique</option>
							<option value="4">Hybride</option>
							<option value="5">Autre</option>
						</select>


        <select id="marque" name="marque">
          <option disabled selected>marques</option>
          <?php while ($a = $reponse->fetch())
      { ?>
          <option value="<?php echo $a['id_marque'];?>"><?php echo $a['marque'];?></option><?php } ?>
        </select>

        <select id="vitesse" name="vitesse">
          <option disabled selected>boite de vitesse</option>
          <?php while ($b = $reponse2->fetch())
      { ?>
          <option value="<?php echo $b['id_vitesse'];?>"><?php echo $b['vitesse'];?></option><?php } ?>
        </select>

        <select id="annee" name="annee">
          <option disabled selected>annee</option>
          <?php while ($c = $reponse3->fetch())
      { ?>
          <option value="<?php echo $c['annee'];?>"><?php echo $c['annee'];?></option><?php } ?>
        </select>

                <input type="textarea" class="left" name="description" required />


                <select id="option1" name="option1">
                  <option disabled selected>option1</option>
                  <?php while ($d = $reponse4->fetch())
              { ?>
                  <option value="<?php echo $d['id_options'];?>"><?php echo $d['options'];?></option><?php } ?>
                </select>


                <select id="option2" name="option2">
                  <option disabled selected>option2</option>
                  <?php while ($e = $reponse5->fetch())
              { ?>
                  <option value="<?php echo $e['id_options'];?>"><?php echo $e['options'];?></option><?php } ?>
    						</select>

                <select id="option3" name="option3">
                  <option disabled selected>option3</option>
                  <?php while ($f = $reponse6->fetch())
              { ?>
                  <option value="<?php echo $f['id_options'];?>"><?php echo $f['options'];?></option><?php } ?>
    						</select>

                <select id="option4" name="option4">
                  <option disabled selected>option4</option>
                  <?php while ($g = $reponse7->fetch())
              { ?>
                  <option value="<?php echo $g['id_options'];?>"><?php echo $g['options'];?></option><?php } ?>
    						</select>

                <input type="text" class="left" name="lienphoto" placeholder="lienphoto" required />
              <p>
                <input type="submit" value="Envoyer" />
              </p>
            </form>

          </div>
        </section>
      </main>

      <!-- footer -->
      <?php include 'include/footer.html';?>
      <!-- footer -->
    </body>
  </html>
