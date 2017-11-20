<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";
function get_info($mail){
    $bdd = connexion_bdd();
	$reponse = $bdd->prepare('SELECT name, first_name, email, phone, adresse, password
								FROM member
								WHERE email = ?')or die(print_r($bdd->errorInfo()));
	$reponse->execute(array($mail));
	$info = $reponse->fetch();
	return $info;
}


function update($nom, $prenom, $mail, $telephone, $adresse, $ancmail){
    $bdd = connexion_bdd();

	$bdd->exec("UPDATE member SET name='".$nom."',
								  first_name='".$prenom."',
								  email='".$mail."',
								  phone='".$telephone."',
								  adresse='".$adresse."'
							  WHERE email = '".$ancmail."'")or die(print_r($bdd->errorInfo()));
}

function update_mdp($password, $mail){
    $bdd = connexion_bdd();
    $bdd->exec("UPDATE member SET password='".$password."'
                                WHERE email='".$mail."'");
}
?>
