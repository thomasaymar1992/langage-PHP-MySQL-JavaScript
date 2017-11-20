<?php

session_start();

require_once "../../view/header/v_header.php";
if(isset($_SESSION['connecte'])){
    require "../../view/menu/v_menuconnecte.php";
    require "../connexion/c_connecte.php";
}else{
    require "../../view/menu/v_menunonconnecte.php";
    require "../connexion/c_non_connecte.php";
}
require_once "../../view/panier/v_panier.php";
require_once "../../modele/historiquedesventes/m_historiquedesventes.php";

$idmembre = $_SESSION['idmembre'];
$func = get_fruit($idmembre);
while($donnees = $func->fetch()){
    $quantite = $donnees['quantity'];
    $weight = $donnees['weight'];
    $description = $donnees['description'];
    $price = $donnees['price'];
    $categories = $donnees['categories'];
    $photo = $donnees['photo'];
    $idfruit = $donnees['idfruit'];
    $acheteur_nom = $donnees['name'];
    $acheteur_prenom = $donnees['first_name'];
    $mail = $donnees['email'];

    require "../../view/historiquedesventes/v_historiquedesventes_gabarit.php";
}

require_once "../../view/footer/v_footer.php";
