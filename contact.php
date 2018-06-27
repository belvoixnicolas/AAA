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
        <h1>Nous contacter</h1>

        <section>
          <div class="coordoner">
            <h2>Nos coordoner</h2>
            <ul>
              <li>Closse Jordan</li>
              <li>jordanclosse@maitrise-web.fr</li>
              <li>07.88.45.35.82</li>
              <li><a href="https://goo.gl/maps/VCsKzJczMHu" target="_blank">8 rue de l'artisanat<br/>Charleville-Mézières</a></li>
            </ul>
          </div>

          <div class='form'>
            <h2>Nous envoyer un mail</h2>
            <form action="#" method="post">
              <p><input type="text" name="sujet" placeholder="Sujet" required/></p>
              <p><textarea name="message" placeholder="Text" required></textarea></p>
              <p><input type="submit" value="Envoyer"/></p>
            </form>
          </div>
      </section>
      </main>

      <!-- footer -->
      <?php include 'include/footer.html';?>
      <!-- footer -->
    </body>
  </html>
