<!DOCTYPE HTML>
  <html lang="fr">
    <head>
      <meta charset="utf-8">
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Vente</title>
      <link rel="icon" type="image/x-icon" href="favicon.ico">
      <!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="resource/img/favicon.ico" /><![endif]-->
      <link rel="stylesheet" type="text/css" href="css/reset.css">
      <link rel="stylesheet" type="text/css" href="css/nav.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/vendre.css">
    </head>
    <body>
      <?php include 'include/navbar.html'; ?>

      <main>
        <h2>VENDRE</h2>

        <form action="#" method="post">
          <fieldset>

            <p class="formTitres">Vos coordonnées</p>
            <p class="textform">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="part1">
              <input type="text" id="nom" class="mefform" name="name" placeholder="nom">
            </div>

            <div>
              <input type="text" id="prenom" class="mefform" name="firstname" placeholder="prénom">
            </div>

            <div>
              <input type="email" id="email" class="mefform" name="mail" placeholder="exemple@test.com">
            </div>

            <div>

              <input type="phone" id="tel" class="mefform" name="phone" placeholder="00 00 00 00 00">
            </div>


        </fieldset>

        <fieldset>

          <p class="formTitres">La voiture</p>
          <p class="textform">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <div class="part2">
            <input type="text" id="marque" class="mefform" name="marque" placeholder="marque">
          </div>

          <div>
            <input type="text" id="modele" class="mefform" name="modele" placeholder="modèle">
          </div>

          <div>
            <input type="text" id="couleur" class="mefform" name="couleur" placeholder="couleur">
          </div>

          <div>
            <input type="text" id="datemec" class="mefform" name="datemec" placeholder="Date de mise en circulation">
          </div>
      </fieldset>

    </form>
      </main>
      <?php include 'include/footer.html'; ?>
    </body>
  </html>
