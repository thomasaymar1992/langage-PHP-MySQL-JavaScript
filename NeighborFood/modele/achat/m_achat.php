<?php

require_once "../../modele/connexionBdd/m_connexionBdd.php";

function get_fruit($premier, $parPage){
    $bdd = connexion_bdd();
	$reponse = $bdd->query('SELECT DISTINCT fruitveg.quantity, 
											fruitveg.weight,
											fruitveg.description,
											fruitveg.price, 
											fruitveg.member_idmembre,
											fruitveg.idcategorie,
											fruitveg.idfruit,
											member.name,
											member.first_name,
											member.email,
											fruitvegcategory.categories,
											fruitvegcategory.photo,
											fruitvegcategory.idfruitvegcategorie
							FROM fruitveg INNER JOIN member ON fruitveg.member_idmembre = member.idmembre
											INNER JOIN fruitvegcategory ON fruitveg.idcategorie = fruitvegcategory.idfruitvegcategorie
                            WHERE fruitveg.sale_nosale = "1" AND member.idmembre != '.$_SESSION['idmembre'].'
							ORDER BY idfruit DESC LIMIT '.$premier.','.$parPage.'
							')
	or die(print_r($bdd->errorInfo()));
																
	return $reponse;
	

}

function nbrFruit(){
    $bdd = connexion_bdd();
    $reponse = $bdd->query('SELECT COUNT(idfruit) as nbrFruit FROM fruitveg INNER JOIN member ON fruitveg.member_idmembre = member.idmembre
                              WHERE fruitveg.sale_nosale = "1" AND member.idmembre != '.$_SESSION['idmembre'].'')or die(print_r($bdd->errorInfo()));
    $nbrFruit = $reponse->fetch();
    return $nbrFruit['nbrFruit'];
}


function get_fruit_categorie($premier, $parPage, $idcateg){
    $bdd = connexion_bdd();
	$reponse = $bdd->query('SELECT DISTINCT fruitveg.quantity, 
											fruitveg.weight,
											fruitveg.description,
											fruitveg.price, 
											fruitveg.member_idmembre,
											fruitveg.idcategorie,
											fruitveg.idfruit,
											member.name,
											member.first_name,
											member.email,
											fruitvegcategory.categories,
											fruitvegcategory.photo,
											fruitvegcategory.idfruitvegcategorie
							FROM fruitveg INNER JOIN member ON fruitveg.member_idmembre = member.idmembre 
											INNER JOIN fruitvegcategory ON fruitveg.idcategorie = fruitvegcategory.idfruitvegcategorie
							WHERE fruitvegcategory.idfruitvegcategorie = "'.$idcateg.'"
							ORDER BY idfruit DESC LIMIT '.$premier.','.$parPage.'
							')
	or die(print_r($bdd->errorInfo()));
																
	return $reponse;
	

}

function nbrFruitCategorie($idcateg){
    $bdd = connexion_bdd();
    $reponse = $bdd->query('SELECT COUNT(idfruit) as nbrFruit
                                              FROM fruitveg INNER JOIN fruitvegcategory ON fruitveg.idcategorie = fruitvegcategory.idfruitvegcategorie
                                              WHERE fruitveg.sale_nosale = "1" AND fruitvegcategory.idfruitvegcategorie = "'.$idcateg.'" ');
    $nbrFruit = $reponse->fetch();
    return $nbrFruit['nbrFruit'];
}


function insert_panier($idfruit, $idmembre, $idcategorie, $date){
    $bdd = connexion_bdd();
    $bdd->exec("INSERT into panier VALUES('',
                                          '$date',
                                          '$idmembre',
                                          '$idfruit',
                                          '',
                                          '$idcategorie')")or die(print_r($bdd->errorInfo()));
    $bdd->exec("UPDATE fruitveg
                SET sale_nosale = '0'
                WHERE idfruit='".$idfruit."'")or die(print_r($bdd->errorInfo()));

}

?>