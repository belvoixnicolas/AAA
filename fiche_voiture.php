<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Voiture</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/fiche_voiture.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
</head>

<body>
  <?php include 'include/navbar.html'; ?>
	<main>
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img/golf7.png" style="width:50%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img/golf7.png" style="width:50%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img/golf7.png" style="width:50%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img/golf7.png" style="width:50%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img/golf7.png" style="width:50%;margin: 0 auto;">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img/golf7.png" style="width:50%;margin: 0 auto;">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/voiture1png" style="width:70%;margin: 0 auto;" onclick="currentSlide(1)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/golf7.png" style="width:70%;margin: 0 auto;" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/golf7.png" style="width:70%;margin: 0 auto;" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/golf7.png" style="width:70%;margin: 0 auto;" onclick="currentSlide(4)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/golf7.png" style="width:70%;margin: 0 auto;" onclick="currentSlide(5)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/golf7.png" style="width:70%;margin: 0 auto;" onclick="currentSlide(6)" alt="">
    </div>
  </div>
</div>
	</main>
		<?php include 'include/footer.html'; ?>

		<script type="text/javascript" src="js/caroussel.js">

		</script>
	</body>
</html>
