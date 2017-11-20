<?php 
session_start();
require_once '../../modele/forum/function.php';
require_once '../../modele/connexionBdd/m_connexionBdd.php';

$bdd = connexion_bdd();
require "../../view/header/v_header.php";
if(isset($_SESSION['connecte'])){
    require "../../view/menu/v_menuconnecte.php";


}else{
    require "../../view/menu/v_menunonconnecte.php";
    require "../connexion/c_non_connecte.php";

}
if(isset($_GET['categorie'])) { 
			       
$_GET['categorie'] = htmlspecialchars($_GET['categorie']);
$sujets = getSujets($_GET['categorie']);





    require_once '../../view/forum/VueCategorie.php';

}

else if(isset($_GET['sujet'])) { 

$_GET['sujet'] = htmlspecialchars($_GET['sujet']);
$posts = getPostSujet($_GET['sujet']);


require_once '../../view/forum/VueSujet.php';

}
else
{ 
	
$accueil = getAccueil();	
require_once '../../view/forum/VueAccueil.php';

}

if(isset($_SESSION['idmembre'])) {


}
require "../../view/footer/v_footer.php";

?>
							
