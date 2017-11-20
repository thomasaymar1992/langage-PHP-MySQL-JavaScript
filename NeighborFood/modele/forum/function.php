  <?php
  
    require_once '../../modele/connexionBdd/m_connexionBdd.php';
  
     
    function getPostSujet ($topic) {
		
	$bdd = connexion_bdd();
    $requete = $bdd->prepare('SELECT * FROM message WHERE sujet = :sujet');
	$requete->execute(array('sujet'=>$topic));	
	
	return $requete;
	
	}
  
  
    function getMember ($idproprio) {
		
	$bdd = connexion_bdd();
	$requete2 = $bdd->prepare('SELECT * FROM member WHERE idmembre = :id');
	$requete2->execute(array('id'=>$idproprio));
	$membres = $requete2->fetch();
		
    return $membres;
	
	}
    
	function getAccueil() {
		
	$bdd = connexion_bdd();
	$requetes = $bdd->query('SELECT * FROM categories_forum');
		
	return $requetes;
		
	}
    
    function getSujets($categorie) {
		
	$bdd = connexion_bdd();
	$requete = $bdd->prepare('SELECT * FROM sujet WHERE categories = :categories');
	$requete->execute(array('categories'=>$categorie));	
	
	return $requete;
		
	}
	
 ?>
