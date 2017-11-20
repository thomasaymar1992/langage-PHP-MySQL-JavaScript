<?php
// Connexion à la base de données

require_once "../../modele/connexionBdd/m_connexionBdd.php";


function test_mail($mail){

    $bdd = connexion_bdd();
	$reponse = $bdd->prepare('SELECT email FROM member where email=?');
	$reponse->execute(array($mail));
	$reponse1 = $reponse->fetch();
	return $reponse1;
}

function insert($nom, $prenom, $mail, $telephone, $adresse, $password){

        $bdd = connexion_bdd();
		$bdd->exec("INSERT INTO member VALUES( '', '$nom', '$prenom', '$mail', '$telephone', '$adresse', '$password', '', '')");
}
		
		


?>
