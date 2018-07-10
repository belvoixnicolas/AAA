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
	<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
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

		<script type="text/javascript" src="js/greg.js">


		</script>
	</body>
</html>
