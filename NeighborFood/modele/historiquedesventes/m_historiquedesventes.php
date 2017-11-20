<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";
function get_fruit($idmembre){
    $bdd = connexion_bdd();
    $reponse = $bdd->query('SELECT DISTINCT fruitveg.quantity,
											fruitveg.weight,
											fruitveg.description,
											fruitveg.price,
											fruitveg.idcategorie,
											fruitveg.idfruit,
											fruitvegcategory.categories,
											fruitvegcategory.photo,
											fruitvegcategory.idfruitvegcategorie,
											member.name,
											member.first_name,
											member.email
							FROM fruitveg INNER JOIN historiquedesventes ON fruitveg.idfruit = historiquedesventes.fruitveg_idfruit
											INNER JOIN fruitvegcategory ON fruitveg.idcategorie = fruitvegcategory.idfruitvegcategorie
											INNER JOIN member ON historiquedesventes.member_idmembre = member.idmembre
                            WHERE fruitveg.member_idmembre = '.$idmembre.'
							ORDER BY idfruit
							')
    or die(print_r($bdd->errorInfo()));

    return $reponse;


}