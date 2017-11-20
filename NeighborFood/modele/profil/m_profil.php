<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";

function get_info($mail){
    $bdd = connexion_bdd();
    $reponse = $bdd->prepare('SELECT name, first_name, email, phone, adresse
								FROM member
								WHERE email = ?')or die(print_r($bdd->errorInfo()));
    $reponse->execute(array($mail));
    $info = $reponse->fetch();
    return $info;
}
?>