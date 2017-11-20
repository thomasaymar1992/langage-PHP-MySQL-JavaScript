<?php

require_once '../../modele/connexionBdd/m_connexionBdd.php';

class addSujet {
	
	private $name;
	private $sujet;
	private $categorie;
	private $bdd;
	
	public function __construct($name,$sujet,$categorie) {
		
		$this->name = htmlspecialchars($name);
		$this->sujet = htmlspecialchars($sujet);
		$this->categorie = htmlspecialchars($categorie);
		$this->bdd = connexion_bdd();
		
	}
	
	public function verif() {
		
		if(strlen($this->name) > 2 AND strlen($this->name) < 80) {
			
			/*Si le nom du sujet est dans le bon intervalle de longueur*/
		
		   if(strlen($this->sujet) > 0) {
			   
			   return 'ok';
	
		   }
		   else
		   { /*Si on a pas de contenu*/
			   $erreur = 'Veuillez entrer le contenu du sujet';
			   return $erreur;
		   }
		}
		else
		{ /*Si le nom du sujet est mauvais*/
			
			$erreur = 'Le nom du sujet doit contenir entre 2 et 80 caracteres';
			return $erreur;
			
		}
	}
	
	 public function insert() { 
		
		$requete = $this->bdd->prepare('INSERT INTO sujet(name,member_idmembre,categories) VALUES(:name,:member_idmembre,:categories)');
		$requete->execute(array('name'=> $this->name,'member_idmembre'=> $_SESSION['idmembre'],'categories'=> $this->categorie));
		
		$requete2 = $this->bdd->prepare('INSERT INTO message(message,member_idmembre,date,sujet) VALUES(:message,:member_idmembre,NOW(),:sujet)');
		$requete2->execute(array('message'=> $this->sujet,'member_idmembre'=> $_SESSION['idmembre'],'sujet'=> $this->name));
		
		return 1;
			
     }
	 
}
?>

