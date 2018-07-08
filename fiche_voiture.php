<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voiture</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/fiche_voiture.css">
    <link rel="stylesheet" type="text/css" href="css/tableau_fiche.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
</head>

<body>
  <?php include 'include/navbar.html'; ?>
	<div class="centrage">
	<main>

<div class="container">
  <div class="mySlides">
    <img src="img/1.jpg" class="nature" style="width:70%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <img src="img/2.jpg" class="nature" style="width:70%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <img src="img/3.jpg" class="nature" style="width:70%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <img src="img/4.jpg" class="nature" style="width:70%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <img src="img/5.jpg" class="nature" style="width:70%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <img src="img/6.jpg" class="nature" style="width:70%;margin: 0 auto;">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/1.jpg" style="width:100%;margin: 0 auto;" onclick="currentSlide(1)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/2.jpg" style="width:100%;margin: 0 auto;" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/3.jpg" style="width:100%;margin: 0 auto;" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/4.jpg" style="width:100%;margin: 0 auto;" onclick="currentSlide(4)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/5.jpg" style="width:100%;margin: 0 auto;" onclick="currentSlide(5)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/6.jpg" style="width:100%;margin: 0 auto;" onclick="currentSlide(6)" alt="">
    </div>
  </div>
</div>
            <div  class="titre">
                <p>Titre</p>
                <p>Prix</p>
            </div>


            <table class="tableau">

              <tr>
                <td class="titretab">MODELE</td>
                <td class="contenu"></td>
             </tr>

              <tr>
               <td class="titretab">DATE DE MISE EN CIRCULATION</td>
                <td class="contenu"></td>
              </tr>

              <tr>
                <td class="titretab">ENERGIE</td>
                <td class="contenu"></td>
              </tr>

              <tr>
                <td class="titretab">BOITE DE VITESSE</td>
                <td class="contenu"></td>
              </tr>

              <tr>
                <td class="titretab">NOMBRE DE PLACES</td>
                <td class="contenu"></td>
              </tr>
                <tr>
                <td class="titretab">NOMBRE DE CHEVAUX</td>
                <td class="contenu"></td>
              </tr>

            </table>


        </main>
	</div>
		<?php include 'include/footer.html'; ?>

		<script type="text/javascript" src="js/caroussel.js">


		</script>
	</body>
</html>
