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
        <h2>VENTE</h2>

        <form action="#" method="post">
          <fieldset>
            <p class="formTitres">Vos coordonnées</p>

            <div>
              <label for="name">Votre nom : <span class="red">*</span></label>
              <input type="text" id="nom" class="mefform" name="name" placeholder="nom">
            </div>

            <div>
              <label for="prenom">Votre prénom : <span class="red">*</span></label>
              <input type="text" id="prenom" class="mefform" name="firstname" placeholder="prénom">
            </div>

            <div>
              <label for="email">Votre email : <span class="red">*</span></label>
              <input type="email" id="email" class="mefform" name="mail" placeholder="exemple@test.com">
            </div>

            <div>
              <label for="tel">Votre téléphone : <span class="red">*</span></label>
              <input type="phone" id="tel" class="mefform" name="phone" placeholder="00 00 00 00 00">
            </div>
        </fieldset>
      </main
      <?php include 'include/footer.html'; ?>
    </body>
  </html>
