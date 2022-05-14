<?php
    
    if(!empty($_POST))
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mdp = md5($_POST['mdp']);
        $adresse = $_POST['adresse'];
        $datenais = $_POST['datenais'];
        $numtel = $_POST['numtel'];
        $sexe = $_POST['sexe'];
        $email = $_POST['email'];
        $pseudo=$_POST['pseudo'];
        

        //connection a la BDD
        $bdd = new PDO('mysql:host=localhost;dbname=webcourses44;charset=utf8;', 'root',"");


        $req = $bdd->prepare('INSERT INTO membre SET me_nom= ?, me_prenom=?, me_mdp=?, me_adresse=?, me_datenais=?, me_numtel=?, me_sexe=?, me_email=?, me_pseudo=?');
        $req->execute([$nom,$prenom,$mdp,$adresse,$datenais,$numtel,$sexe,$email,$pseudo]);
       

        echo'Enregistrer';
    }

   
    

   



?>