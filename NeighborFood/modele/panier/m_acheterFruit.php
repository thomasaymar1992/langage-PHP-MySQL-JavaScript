<?php
session_start();
require_once "../../modele/connexionBdd/m_connexionBdd.php";

if(isset($_GET['idfruit'])) {
    $idfruit = $_GET['idfruit'];
    $idmembre = $_SESSION['idmembre'];
    $date = date("Y-m-d H:m:s");
    $bdd = connexion_bdd();

    $bdd->exec("INSERT into historiquedesventes VALUES('',
                                                       '$date',
                                                       '$idfruit',
                                                       '$idmembre')") or die(print_r($bdd->errorInfo()));
    $bdd->exec("DELETE FROM panier
                  WHERE fruitveg_idfruit='".$idfruit."'")or die(print_r($bdd->errorInfo()));
}
