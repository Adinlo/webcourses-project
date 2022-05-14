<html>
	<head>
		
		<meta charset="eft-8" />
		<title> Déjà inscrit </title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	
	</head>
	
	<body>
	
		<h1><u> Déjà Inscrit </u></h1>
		
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

		
		<p><h2> Pour vous connecter : </h2></p>

		<div class="lili">
		<p>
		Veuillez entrer votre identifiant: <br />
		<input type="text" name="Identifiant" value="" />
		</p>

		<p>
		Veuillez entrer votre mot de passe :<br />
		<input type="text" name="Mot de passe" value="" />
		</p>

		<p>
		<input type="submit" value="Valider" />
		</p>

		</div>

		<center><div class=text1>Bienvenue
		<?php
		session_start();
		$bdd = new PDO('mysql:host=localhost;dbname=webcourses44;charset=utf8;', 'root','');
		?> 
		</div>


		<div class=text>
		<?php

			 $CO_PSEUDO = $_SESSION['co_pseudo'];
			   
				
				$mysqli = new mysqli("localhost", "root", "", "webcourses44");
				$mysqli -> set_charset("utf8");
				$requete = "SELECT * FROM coureur WHERE co_pseudo='$CO_PSEUDO'";
				$resultat = $mysqli -> query($requete);
				$st = $resultat-> fetch_assoc();

					echo '</br></br>';
				    echo 'Vos informations sont : ';
					echo '</br></br>';
					echo 'Votre pseudo est :';
					echo $st['co_pseudo'] ;
					echo '</br></br>';
					echo 'Votre nom est :';
					echo $st['co_nom'] ;
					echo '</br></br>';
					echo 'Votre prenom est :';
					echo $st['co_prenom'] ;

					$requete = "SELECT co_nom, co_prenom, cl_nom, co_rang , co_point
					FROM coureur, club, adhérer
					WHERE fk_cl_id=cl_id
					AND fk_co_id=co_id
					AND co_prenom= 'Adrien' 
					AND co_nom= 'Nordin'";

					echo'</br></br>';
					echo'Votre club est :';
					echo $st['cl_nom'];
					echo'</br></br>';
					echo'Votre rang est :';
					echo $st['co_rang'];
					echo'</br></br>';
					echo 'Votre nombre de point est de :';
					echo $st['co_point'];

				$mysqli->close();
				
			?>
		</div>
</p>
</center>
	
	
	</body>
	<footer><b>
		<hr>
		<div class="footi">
		<a href="Politique de confidentialité.php">Politique de confidentialité</a>
		<a href="Mentions légales et politique de confidentialité.php">Mentions légales et politique </a>
		<a href="Autorisation de droit à l’image.php">Autorisation de droit à l’image</a>
		<a href="chartre_cookies.php">Chartre cookies</a>
		</div>

	</footer></b>


</html>
