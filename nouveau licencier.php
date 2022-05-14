<html>
	<head>
		
		<meta charset="eft-8" />
		<title> Webcourse-nouveau licencier </title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" href="nouveaulicencier.css" />
	</head>
	<body>
	
		<h1><u> Nouveau Licencier </u></h1>
		
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
	

		<div class="form_wrapper">
  <div class="form_container">
    <div class="title">
      <h2><u> Inscription </u></h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form method="POST" action="traitementinscri.php">
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="nom" placeholder="Nom" required />
          </div>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="prenom" placeholder="Prénom" minlenght="8" />
          </div>
		  <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="text" name="pseudo" placeholder="Pseudo" required />
          </div>
		  <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="mdp" placeholder="Mot de Passe"  minlenght="8" />
          </div>
		  <p>Exemple d'adresse : 18 rue du papillon 75000 </p>
		  <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="text" name="adresse" placeholder="adresse"  />
          </div>
		  <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <p>Date naissance</p>
		  <input type="date" name="datenais" placeholder="date naissance jj/mm/aaaa"  />
          </div>
		  <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
            <input type="tel" name="numtel" placeholder="numtel"   />
          </div>
          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                <input type="email" name="email" placeholder="Email" />
              </div>
              
              <div class="input_field radio_option">
              <input type="radio" name="pro" id="rd1" value="niveau">
              <label for="rd1">Professionnel</label>
              <input type="radio" name="amateur" id="rd2" value="niveau">
              <label for="rd2">Amateur</label>
              </div>

            </div>

          </div>
            	<div class="input_field radio_option">
              <input type="radio" name="sexe" id="rd1" value="H">
              <label for="rd1">Homme</label>
              <input type="radio" name="sexe" id="rd2" value="F">
              <label for="rd2">Femme</label>
              </div>
              <div class="input_field select_option">
               
                <div class="select_arrow"></div>
              </div>


            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb1">
    			<label for="cb1">J'accepte les conditions d'utilisation</label>
            </div>
            <div class="input_field checkbox_option">
            	<input type="checkbox" id="cb2">
    			<label for="cb2">Je m'inscris a la newsletter</label>
            </div>
          <input class="button" type="submit" value="Register" />
        </form>
      </div>
    </div>
  </div>
</div>

	
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