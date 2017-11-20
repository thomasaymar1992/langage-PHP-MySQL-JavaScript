<?php

require_once "../../modele/connexionBdd/m_connexionBdd.php";
function getuser(){
    $bdd = connexion_bdd();
    $reponse = $bdd ->query( 'SELECT idmembre,name,first_name,email FROM member WHERE email != "admin@gmail.com" ');
    return $reponse;


}


?>