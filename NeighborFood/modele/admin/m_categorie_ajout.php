<?php

require_once "../../modele/connexionBdd/m_connexionBdd.php";

function ajout_categorie($categorie,$photo){
    $bdd = connexion_bdd();
    $bdd->exec("INSERT into fruitvegcategory VALUES('','$categorie', '$photo')")or die(print_r($bdd->errorInfo()));
}
?>