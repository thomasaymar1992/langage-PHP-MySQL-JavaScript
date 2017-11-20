<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";

if(isset($_GET['idfruit'])) {
    $idfruit = $_GET['idfruit'];
    $bdd = connexion_bdd();

    $bdd->exec("UPDATE fruitveg SET sale_nosale='1'
                        WHERE idfruit='".$idfruit."'")or die(print_r($bdd->errorInfo()));
    $bdd->exec("DELETE FROM panier
                  WHERE fruitveg_idfruit='".$idfruit."'")or die(print_r($bdd->errorInfo()));
}