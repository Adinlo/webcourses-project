<html>
	<head>
		
		<meta charset="eft-8" />
		<title> Webcourse-Info </title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">

	</head>
	
	<body>
	
		<h1><u> Informations Club </u></h1> 

		<h2>
		<div class="topcoco">
		<a href="index.php">Accueil</a>
		<a href="Qui sommes nous.php">Qui sommes nous ?</a>
		<a href="calendrier évènementiel.php">Calendrier évènementiel</a>
		<a href="infformations club.php">Informations Club</a>
		<a href="nouveau licencier.php">Nouveau Licenier</a>
		<a href="déjà inscrit.php">Déjà Inscrit</a>
		<a href="contact.php">Contact</a></h2>
		</div>
	
		<div class=titre> <p> Choisir un Club: </p> </div>
            <form method="POST" action="*.php">
				<center><div class='select'>
					<select>

						<?php

					$bdd = new PDO('mysql:host=localhost;dbname=webcourses44;charset=utf8;', 'root',"");
					$stmt = $bdd->prepare("SELECT * FROM club");
					$stmt->execute();
						while ($row = $stmt->fetch()) 

						?>

					<option>
						<?php
							echo ''.$row['cl_nom'].'';
							echo "  Nombre d'adherent : ";
							echo ''.$row['cl_numtel'].'';
							echo ":  Adresse : " ; ''.$row['cl_adresse'].'';
							echo ":  Numero tel : " ;
							echo ":  Adresse mail : "; ''.$row['cl_email'].'';
						?> 
					</option>
						
						
					</select>
				</div>

    		</form>

		<p>
		<input type="reset" value="Annuler" />
		<input type="submit" value="Valider" />
		</p>

	</body>

	<footer><b>
		<hr>
		<div class="footi">
		<a href="Politique de confidentialité.php">Politique de confidentialité</a>
		<a href="Mentions légales et politique de confidentialité.php">Mentions légales et politique </a>
		<a href="Autorisation de droit à l’image.php">Autorisation de droit à l’image</a>
		<a href="chartre_cookies.php">Chartre cookies</a>
		</div>
		</hr>

	</footer></b>

</html>