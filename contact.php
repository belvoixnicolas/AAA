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
        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
      <!-- navbar -->
      <?php include 'include/navbar.html';?>
      <!-- navbar -->

      <main>
        <section>
          <div class="coordoner">
            <h2>Agence Automobile Ardennaise</h2>

            <ul>
              <li><img src="img/icon/user.gif">Closse Jordan</li>
              <li><img src="img/icon/immeuble.gif">8 Rue de l'Artisanat</li>
              <li><img src="img/icon/immeuble.gif">08000 Charleville-Mézières</li>
              <li><img src="img/icon/tel.gif">07.88.45.35.82</li>
              <li><img src="img/icon/tel.gif">07.84.46.96.67</li>
              <li><img src="img/icon/mail.png">jordanclosse@maitrise-web.fr</li>
            </ul>
          </div>

          <div class="fomfram">
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
    									<i class="fa fa-paper-plane" aria-hidden="true"></i>
    									<span class="bar"><span class="load"></span>
                </button class="buttonvendre">
              </p>
            </form>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2578.2552023387475!2d4.728826315705903!3d49.74364177938405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ea121bccb2b497%3A0x766b04ea4ac3d061!2s8+Rue+de+l&#39;Artisanat%2C+08000+Charleville-M%C3%A9zi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1530714057173" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </section>
      </main>

      <!-- footer -->
      <?php include 'include/footer.html';?>
      <!-- footer -->
    </body>
  </html>
