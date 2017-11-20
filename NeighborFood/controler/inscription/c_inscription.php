<?php

if(isset($_POST['valider'])){
	
	htmlentities($nom = $_POST['nom']);
	htmlentities($prenom = $_POST['prenom']);
	htmlentities($mail = $_POST['mail']);
	htmlentities($telephone = $_POST['telephone']);
	htmlentities($adresse = $_POST['adresse']);
	htmlentities($mdp = $_POST['mdp']);
    htmlentities($conf_mdp = $_POST['conf_mdp']);
	require_once "../../modele/inscription/m_formulaire_post.php";
	if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
		if(empty(test_mail($mail))){
			if(empty($nom) || empty($prenom) || empty($mail) || empty($telephone) || empty($adresse) || empty($mdp) || empty($conf_mdp)){
		header('Location: /NeighborFood/controler/inscription/c_inscription.php');
			}else{
                if($mdp == $conf_mdp) {
                    $password = password_hash($mdp, PASSWORD_DEFAULT);
                    insert($nom, $prenom, $mail, $telephone, $adresse, $password);
                    header('Location: /NeighborFood/controler/accueil/c_accueil.php');
                }else{header('Location: /NeighborFood/controler/inscription/c_inscription.php');}
			}
		}else{ header('Location: /NeighborFood/controler/inscription/c_inscription.php');}
	}else{header('Location: /NeighborFood/controler/inscription/c_inscription.php');}
	
}else{
	require "../../view/header/v_header.php";
	if(isset($_SESSION['connecte'])){		
		require "../../view/menu/v_menuconnecte.php";
	}else{
		 require "../../view/menu/v_menunonconnecte.php";
	}
	require "../../view/inscription/v_formulaire.php";
	require "../../view/footer/v_footer.php";
}
?>