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
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
      <?php include 'include/navbar.html'; ?>

      <main class="container">
        <form class="venteform" action="traitement.php" method="post" enctype="multipart/form-data">
          <div class="coordonnées">
            <h3>Coordonnées</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

            <div class="frm">
              <input type="radio" name="genre" value="monsieur">Monsieur
              <input type="radio" name="genre" value="madame">Madame
            </div>
            <div class="formulaire1">
              <input type="text" name="nom" id="nom" placeholder="Nom prénom" required> <br>
              <input type="text" name="tel" id="tel" placeholder="Téléphone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required> <br>
              <input type="email" name="email" id="email" placeholder="E-mail" required> <br>
              </div>
            </div>
          <div class="voiture">
            <h3>Véhicule</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <div class="formulaire2">

              <input type="text" name="marque" id="marque" placeholder="Marque" required> <br>
              <input type="text" name="modele" id="modele" placeholder="Modèle" required> <br>
              <input type="text" name="km" id="km" placeholder="Kilométrage" required> <br>

              <input type="text" name="annee" id="annee" placeholder="Année"> <br>
              <input type="text" name="energie" id="energie" placeholder="Energie" required> <br>
          </div>
              <label style="padding:24%" for="photo">Photo :<input type="file" name="photo"><br></label>
              </div>
          <div class="commentaires">
            <h3>Commentaire</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

            <textarea class="textarea" name="name" rows="" cols=""></textarea>
          </div>
         <input type="submit" class="button" value"submit">
        </form>
       </main>
      <?php include 'include/footer.html'; ?>
    </body>
  </html>
