<?php session_start();
require_once '../../modele/forum/function.php';
require_once '../../modele/connexionBdd/m_connexionBdd.php';
require_once '../../modele/forum/addSujet.class.php';

$bdd = connexion_bdd();

if(isset($_POST['name']) AND isset($_POST['sujet'])) {

$addSujet = new addSujet($_POST['name'],$_POST['sujet'],$_POST['categorie']);
$verif = $addSujet->verif();

if($verif == "ok") {
		
if($addSujet->insert()) {
			
header('Location:index.php?sujet='.$_POST['name']);
			
}
	
}

else

{ 

$erreur = $verif;

}
	
if(isset($erreur)) {
					 
echo $erreur;

}

}

require_once '../../view/forum/VueAddSujet.php';	

