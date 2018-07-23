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
        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
    </head>
    <body>
      <!-- NAVBAR -->
        <?php include 'include/navbar.html'; ?>
      <!-- NAVBAR -->

      <main>
        <section class="filtre">
          <form action="#" method="post">
            <p class="select">
              <select id="place" name="place">
                <option value="none" selected>Nombre de place</option>
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
                <option value="none" selected>Marque</option>
              </select>
            </p>

            <p class="select">
              <select id="energie" name="energie">
                <option value="none" selected>Energie</option>
              </select>
            </p>

            <p class="select">
              <select id="boite" name="boite">
                <option value="none" selected>Boîte de vitesse</option>
              </select>
            </p>

            <p>
              <input type="submit" value="Valid" />
              <input type="reset" value="Reset">
            </p>
          </form>
        </section>

        <section class="liste">
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
