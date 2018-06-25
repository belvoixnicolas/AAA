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
</head>

<body>
  <?php include 'include/navbar.html'; ?>

  <main>
    <div class="photo_voiture">
      <img class="voiture" src="img/voiture1.png" alt="voiture" />
    </div>

				<div>
					<div id="blocInfos">
      		<div class="ficheTitre">Titre</div>
      		<div class="fichePrix">Prix € </div>
				</div>
				<div id="blocDescription">
					<ul>
      		<li class="ficheAnnee">Année mise en circulation</li>
      		<li class="ficheKilometres">Kilométrage</li>
      		<li class="ficheCouleur">Couleur</li>
				</ul>
			</div>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</main>
		<?php include 'include/footer.html'; ?>
	</body>
</html>
