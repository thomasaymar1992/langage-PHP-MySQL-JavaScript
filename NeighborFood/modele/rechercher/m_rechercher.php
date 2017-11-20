<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";
function recherche($recherche){
    $bdd = connexion_bdd();
    $reponse = $bdd->query ('SELECT name,
                                    first_name,
                                    email
                                FROM member
                                WHERE name LIKE "%'.$recherche.'%" OR first_name LIKE "%'.$recherche.'%"
                                LIMIT 0,4
                                ');
    return $reponse;

}
?>