<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";
function get_password($mail){
    $bdd = connexion_bdd();
	$reponse = $bdd->prepare('SELECT password FROM member WHERE email = ?');
	$reponse->execute(array($mail));
	$password = $reponse->fetch();
	return $password['password'];

}
	
function get_namefirstname($mail){
    $bdd = connexion_bdd();
		$reponse_nom = $bdd->prepare('SELECT name, first_name, idmembre FROM member WHERE email = ?');
		$reponse_nom->execute(array($mail));
		$name = $reponse_nom->fetch();
		return $name;
}

	
?>