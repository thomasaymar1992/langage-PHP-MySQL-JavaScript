<?php 


require_once "../../modele/connexionBdd/m_connexionBdd.php";
function get_idmembre($mail){
    $bdd = connexion_bdd();
	$reponse = $bdd->prepare('SELECT idmembre FROM member where email=?');
	$reponse->execute(array($mail));
	$id = $reponse->fetch();
	$idmembre = $id['idmembre'];
	return $idmembre;
}


	function insertfruit($quantite, $poids, $description, $prix, $date, $buyorchange, $idmembre, $idcategorie){
        $bdd = connexion_bdd();
		$bdd->exec("INSERT into fruitveg VALUES('', 
											'$quantite', 
											'$poids', 
											'$description',
											'$prix',
											'$date',
											'1', 
											'$buyorchange', 
											'$idmembre', 
											'$idcategorie')")or die(print_r($bdd->errorInfo()));
	}
?>