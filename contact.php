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
    </head>
    <body>
      <!-- navbar -->
      <?php include 'include/navbar.html';?>
      <!-- navbar -->

      <main>
        <section>
          <h1>Nous contacter</h1>

          <div class="coordoner">
            <h2>Agence Automobile Ardennaise</h2>

            <ul>
              <li>Closse Jordan</li>
              <li>8 Rue de l'Artisanat</li>
              <li>08000 Charleville-Mézières</li>
              <li>07.88.45.35.82</li>
              <li>07.84.46.96.67</li>
              <li>jordanclosse@maitrise-web.fr</li>
            </ul>
          </div>

          <form action="#" method="post">
            <input type="text" name="nom" placeholder="Nom" required />
            <input type="text" name="prenom" placeholder="Prénom" required />
            <input type="email" name="mail" placeholder="Mail" required />
            <input type="tel" name="tel" placeholder="Tel" required />
            <textarea name="text" placeholder="Text" required></textarea>
            <input type="submit" value="Envoyer" />
          </form>
        </section>
      </main>

      <!-- footer -->
      <?php include 'include/footer.html';?>
      <!-- footer -->
    </body>
  </html>
