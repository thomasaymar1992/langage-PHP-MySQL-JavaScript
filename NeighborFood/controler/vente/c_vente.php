<?php

session_start();

if(isset($_POST['valider'])){
	htmlentities($quantite = $_POST['quantite']);
	htmlentities($poids = $_POST['poids']);
	htmlentities($description = addslashes($_POST['description']));
	htmlentities($prix = $_POST['prix']);
	htmlentities($buyorchange = $_POST['buyorchange']);
	$mail = $_SESSION['mail'];
	htmlentities($idcategorie = $_POST['categorie']);
	$date = date("Y-m-d H:m:s");
	
	require "../../modele/vente/m_vente.php";
	$idmembre = get_idmembre($mail);
	if($buyorchange=='buy') {
        if (empty($quantite) || empty($poids) || empty($description) || empty($prix) || empty($buyorchange)) {
            header('Location : http://localhost/NeighboorFood/controler/vente/c_vente.php');
        } else {
            insertfruit($quantite, $poids, $description, $prix, $date, $buyorchange, $idmembre, $idcategorie);
            header('Location: http://localhost/NeighborFood/controler/accueil/c_accueil.php');
        }
    }else{
        if (empty($quantite) || empty($poids) || empty($description) || empty($buyorchange)) {
            header('Location : http://localhost/NeighboorFood/controler/vente/c_vente.php');
        } else {
            insertfruit($quantite, $poids, $description, $prix, $date, $buyorchange, $idmembre, $idcategorie);
            header('Location: http://localhost/NeighborFood/controler/accueil/c_accueil.php');
        }

    }
}else{
	require "../../view/header/v_header.php";
	require "../../view/menu/v_menuconnecte.php";

	require "../connexion/c_connecte.php";
	
	require "../../view/vente/v_vente.php";
	require "../../view/footer/v_footer.php";
}