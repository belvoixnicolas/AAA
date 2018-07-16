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
        <section>

          <div class="fomfram">
            <form action="traitement.php" method="post">
              <p>
                <input type="text" class="left" name="nom" placeholder="Nom" required />
                <input type="text" class="left" name="nbreplace" placeholder="nbreplace" required />
                <input type="text" class="left" name="km" placeholder="km" required />
                <input type="text" class="left" name="modele" placeholder="modele" required />
                <input type="text" class="left" name="energie" placeholder="energie" required />
                <input type="text" class="left" name="marques" placeholder="marques" required />
                <input type="text" class="left" name="vitesse" placeholder="vitesse" required />
                <input type="text" class="left" name="annee" placeholder="annee" required />

              </p>

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
