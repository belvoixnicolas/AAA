<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vente</title>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<!--[if IE]>
		<link rel="shortcut icon" type="image/x-icon" href="resource/img/favicon.ico" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/vendre.css">
		<link rel="stylesheet" type="text/css" href="css/hover-min.css">
		<link rel="stylesheet" type="text/css" href="css/hover.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
	<?php include 'include/navbar.html'; ?>

	<main>
		<h1 class="h1vendre animated zoomIn">Vendez votre véhicule avec simplicité et rapidité&nbsp!</h1>

		<section class="conteneur">
			<div class="gauche animated fadeInLeft">
				<h4 class="h4vendre"> <img src="./img/icon/defaut.gif" alt=""> Lorem Ipsum</h4>
				<p class="p">
					"Lorem ipsum dolor sit amet"
				</p>
				<br>
				<h4 class="h4vendre"> <img src="./img/icon/defaut.gif" alt=""> Lorem Ipsum</h4>
				<p class="p">
					"Lorem ipsum dolor sit amet"
				</p>
				<br>
				<h4 class="h4vendre"> <img src="./img/icon/defaut.gif" alt=""> Lorem Ipsum</h4>
				<p class="p">
					"Lorem ipsum dolor sit amet"
				</p>
				<br>
			</div>
			<form class="formvente animated fadeInRight" action="index.html" method="post">

				<div class="cars">
					<h2 class="h2vendre">Votre véhicule :</h2>
					<input type="text" id="marque" name="marque" placeholder="Marque et modèle*" required>

					<input type="text" id="energie" name="energie" placeholder="Energie*" required>

					<input type="text" id="année" name="année" placeholder="Année*" required>

					<input type="text" id="km" name="km" placeholder="Kilomètrage*" required>

				</div>

				<div class="coordonnées">
					<h2 class="h2vendre">Vos coordonnées&nbsp;:</h2>
					<input type="text" id="nom" name="nom" placeholder="Nom et prénom*" required>

					<input type="text" id="tel" name="tel" placeholder="Téléphone*" required>

					<input type="text" id="codepostal" name="codepostal" placeholder="Code postal*" required>

					<input type="email" id="mail" name="mail" placeholder="E-mail*" required>
					<br>
					<button class="buttonvendre" type="submit">
									Submit
									<i class="fa fa-paper-plane" aria-hidden="true"></i>
									<span class="bar"><span class="load"></span></button class="buttonvendre">
					</div>
			</form>
		</section>

		<div class="titletemoin">
			<h2 class="h2index wow animated fadeInLeft" data-wow-duration="2s" style="color:white;"><img src="./img/icon/description.gif" class="iconetémoins" alt="">
			Nos clients témoignent</h2>
		</div>
		<div id="slider">
			<section class="témoignages">
			<div class="témoinsgauche">
				<div class="avisG">
					<img id=imgtémoins src="./img/images.jpeg" alt="img1">
					<div class="blocnotenom">
						<h4 class="nametem">Sarah V.(35)</h4>
						<div class="étoiles">
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
						</div>
					</div>
					<p class="Tem">"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis " </p>
				</div>
				<div class="avisD">
					<img id=imgtémoins src="./img/images.jpeg" alt="img2">
					<div class="blocnotenom">
						<h4 class="nametem">Sarah V.(35)</h4>
						<div class="étoiles">
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
						</div>
					</div>
					<p class="Tem">"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis " </p>
				</div>
			</div>
			<div class="témoinsgauche">
				<div class="avisG">
					<img id=imgtémoins src="./img/images.jpeg" alt="img1">
					<div class="blocnotenom">
						<h4 class="nametem">Sarah V.(35)</h4>
						<div class="étoiles">
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
						</div>
					</div>
					<p class="Tem">"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis " </p>
				</div>
				<div class="avisD">
					<img id=imgtémoins src="./img/images.jpeg" alt="img1">
					<div class="blocnotenom">
						<h4 class="nametem">Sarah V.(35)</h4>
						<div class="étoiles">
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
						</div>
					</div>
					<p class="Tem">"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis " </p>
				</div>
			</div>
			<div class="témoinsgauche">
				<div class="avisG">
					<img id=imgtémoins src="./img/images.jpeg" alt="img1">
					<div class="blocnotenom">
						<h4 class="nametem">Sarah V.(35)</h4>
						<div class="étoiles">
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
						</div>
					</div>
					<p class="Tem">"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis " </p>
				</div>
				<div class="avisD">
					<img id=imgtémoins src="./img/images.jpeg" alt="img2">
					<div class="blocnotenom">
						<h4 class="nametem">Sarah V.(35)</h4>
						<div class="étoiles">
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
						</div>
					</div>
					<p class="Tem">"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis " </p>
				</div>
			</div>
			<div class="témoinsgauche">
				<div class="avisG">
					<img id=imgtémoins src="./img/images.jpeg" alt="img1">
					<div class="blocnotenom">
						<h4 class="nametem">Sarah V.(35)</h4>
						<div class="étoiles">
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
						</div>
					</div>
					<p class="Tem">"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis " </p>
				</div>
				<div class="avisD">
					<img id=imgtémoins src="./img/images.jpeg" alt="img1">
					<div class="blocnotenom">
						<h4 class="nametem">Sarah V.(35)</h4>
						<div class="étoiles">
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
							<i id="stars" class="fas fa-star"></i>
						</div>
					</div>
					<p class="Tem">"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis " </p>
				</div>
			</div>
			</section>
		</div>

		<section class="rappelconcept">
			<a class="concept" href="concept.php"><p class="hvr-pulse animated">Notre concept</p></a>
		</section>


	</main>
	<?php include 'include/footer.html'; ?>
	<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
</body>
</html>
