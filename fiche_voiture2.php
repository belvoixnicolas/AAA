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
	  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
</head>

<body>
  <?php include 'include/navbar.html'; ?>
	<div class="centrage">
		<main>
			<section class="container">
	  <div id="caroussel">
	    <figure style="background:url('img/1.jpg'); background-size:cover">1</figure>
	    <figure style="background:url('img/2.jpg'); background-size:cover">2</figure>
	    <figure style="background:url('img/3.jpg'); background-size:cover">3</figure>
	    <figure style="background:url('img/4.jpg'); background-size:cover">4</figure>
	    <figure style="background:url('img/5.jpg'); background-size:cover">5</figure>
	    <figure style="background:url('img/6.jpg'); background-size:cover">6</figure>


	  </div>

	</section>
	<div class="next"></div>
	<div class="prev"></div>

    <div  class="titre">
        <p>Titre</p>
        <p class="prix">Prix</p>
    </div>

<div class="container2">
    <table class="tableau">
<tr class="l1">
	<th>Marque</th>
	<td>Citroen</td>
</tr>
<tr class="l2">
	<th>Modèle</th>
	<td>C3	</td>
</tr>
<tr class="l1">
	<th>Année de mise en circulation</th>
	<td>2018</td>
</tr>
<tr class="l2">
	<th>Nombre de places</th>
	<td>5</td>
</tr>
		<tr class="l1">
			<th>Energie</th>
			<td>Essence</td>
		</tr>
</table>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>


<button class="buton">Texte Accrocheur</button>
        </main>
	</div>
		<?php include 'include/footer.html'; ?>

		<script type="text/javascript" src="js/greg.js">


		</script>
	</body>
</html>
