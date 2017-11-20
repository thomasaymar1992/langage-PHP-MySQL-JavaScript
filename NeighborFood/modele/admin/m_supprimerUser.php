<?php

require_once "../../modele/connexionBdd/m_connexionBdd.php";

if(isset($_GET['idmembre'])) {
    $idmembre = $_GET['idmembre'];

    $bdd = connexion_bdd();

    $reponse = $bdd->query("SELECT *
                 FROM panier
                 WHERE member_idmembre='".$idmembre."'")or die(print_r($bdd->errorInfo()));
    $donnee = $reponse->fetch();
    if($donnee) {

        $bdd->exec("DELETE FROM panier
                       WHERE member_idmembre='" . $idmembre . "'") or die(print_r($bdd->errorInfo()));

        $bdd->exec("DELETE FROM member
                  WHERE idmembre='" . $idmembre . "'") or die(print_r($bdd->errorInfo()));
    }else{
        $bdd->exec("DELETE FROM member
                  WHERE idmembre='" . $idmembre . "'") or die(print_r($bdd->errorInfo()));
    }
}

?>