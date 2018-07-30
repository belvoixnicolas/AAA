<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voiture</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/caroussel.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/tableau_fiche.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
</head>

<body>
  <!-- NAVBAR -->
    <?php include 'include/navbar.html'; ?>
  <!-- NAVBAR -->
  
  <main>
    <!-- caroussel -->
    <div class="scene wow animated zoomIn">
      <div class="slide_gauche" onclick="présédent();"><p><</p></div>
      <ul>
        <li id="0"><hr class="gauche"><img src="img/1.jpg"><hr class="droite"></li>
        <li id="1"><hr class="gauche"><img src="img/2.jpg"><hr class="droite"></li>
        <li id="2"><hr class="gauche"><img src="img/3.jpg"><hr class="droite"></li>
      </ul>
      <div class="slide_droite" onclick="suivent();"><p>></p></div>
    </div>
    <!-- caroussel -->

    <section class='info'>
      <h2>Titre</h2>
      <h3>Prix</h3>

      <table class="wow animated slideInLeft">
        <tr>
          <th>Marque</th>
          <td>Oppel</td>
        </tr>
        <tr>
          <th>Kilomètres</th>
          <td>1988547454 Km</td>
        </tr>
        <tr>
          <th>Année de mise en service</th>
          <td>1950</td>
        </tr>
        <tr>
          <th>Energie</th>
          <td>Huille de patate</td>
        </tr>
        <tr>
          <th>Nombre de place</th>
          <td>1/2 Place</td>
        </tr>
        <tr>
          <th>Boite de vitesse</th>
          <td>Manuelle</td>
        </tr>
      </table>

      <p class="description wow animated slideInRight">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, reiciendis nesciunt repudiandae officia inventore, esse saepe 
        illum quidem nisi officiis iusto ex corporis, velit dicta voluptatem voluptatibus doloribus accusantium veritatis!
      </p>

      <button class="contact wow animated zoomIn"><img src="img/icon/defaut.gif"><span>Essayer la</span></button>    
    </section>

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
          </button class="buttonvendre">
        </p>
      </form>  
  </main>

  <!-- FOOTER -->
    <?php include 'include/footer.html'; ?>
  <!-- FOOTER -->
    <script type="text/javascript" src="js/carousel_voiture.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script type="text/javascript">
    $('.contact').click(function() {
      $('form').animate({height: 'toggle'}, 'slow');
    });
    </script>
</body>
</html>
