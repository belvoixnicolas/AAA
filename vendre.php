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
		<link rel="stylesheet" type="text/css" href="css/footer.css">
		<link rel="stylesheet" type="text/css" href="css/vendre.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	</head>

	<body>
		<?php include 'include/navbar.html'; ?>

		<main>
			<form class="venteform" action="traitement.php" method="post" enctype="multipart/form-data">
				<h2>Vendez votre véhicule avec simplicité et rapidité !</h2>

				<div class="container">

					<div class="gauche">
						<h4>Exemple</h4>
						<p class="p">bla bla bla bla bla bla bla</p>

					</div>

					<div class="droite">
					</div>

				</div>



				<!---
				<div class="voiture">
					<h3>Véhicule</h3>
					<p class="ptemoin">
						"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					</p>
					<div class="formulaire2">
						<input type="text" name="marque" id="marque" placeholder="Marque" required>
						<br>
						<input type="text" name="modele" id="modele" placeholder="Modèle" required>
						<br>
						<input type="text" name="km" id="km" placeholder="Kilométrage" required>
						<br>
						<input type="text" name="annee" id="annee" placeholder="Année" required>
						<br>
						<input type="text" name="energie" id="energie" placeholder="Energie" required>
						<br>
					</div>
					<div class="pPhoto" style="padding-left:22.8%" for="photo">
						Photo :
						<input type="file" name="photo" required>
						<br>
					</div>
					<div class="pPhoto" style="padding-left:22.8%" for="photo">
						Photo :
						<input type="file" name="photo" required>
						<br>
					</div>
					<div class="pPhoto" style="padding-left:22.8%" for="photo">
						Photo :
						<input type="file" name="photo" required>
						<br>
					</div>
				</div>
				--->
			</form>
			<section id="temoin">
				<h2>Nos clients témoignent</h2>
				<div id="avis">
					<div class="temoignage">
						<div class="pasclasse">
							<div class="test">
								<div class="centre">
									<img src="./img/images.jpeg" id="homer" alt="">
								</div>
								<div class="centre">
									<p class="ptemoin">
										<strong>Sarah V. (35):</strong>
									</p>
									<p class="ptemoin">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</p>
								</div>
							</div>
							<div class="zut">
								<p class="ptemoin">
									"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis  "
								</p>
							</div>
						</div>
					</div>
					<div class="temoignage">
						<div class="pasclasse">
							<div class="test">
								<div class="">
									<img src="./img/fed1.jpg" id="homer" alt="">
								</div>
								<div class="centre">
									<p class="ptemoin">
										<strong>Roger F (sw):</strong>
									</p>
									<p class="ptemoin">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</p>
								</div>
							</div>
							<div class="zut">
								<p class="ptemoin">
									"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis  "
								</p>
							</div>
						</div>
					</div>
					<div class="temoignage">
						<div class="pasclasse">
							<div class="test">
								<div class="">
									<img src="./img/anne.jpeg" id="homer" alt="">
								</div>
								<div class="centre">
									<p class="ptemoin">
										<strong>Anne H. (51):</strong>
									</p>
									<p class="ptemoin">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</p>
								</div>
							</div>
							<div class="zut">
								<p class="ptemoin">
									"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis  "
								</p>
							</div>
						</div>
					</div>
					<div class="temoignage">
						<div class="pasclasse">
							<div class="test">
								<div class="">
									<img src="./img/face1.jpeg" id="homer" alt="">
								</div>
								<div class="centre">
									<p class="ptemoin">
										<strong>David S. (08):</strong>
									</p>
									<p class="ptemoin">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</p>
								</div>
							</div>
							<div class="zut">
								<p class="ptemoin">
									"Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis  "
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php include 'include/footer.html'; ?>
	</body>
</html>
