<?php

require_once '../../modele/connexionBdd/m_connexionBdd.php';
require_once 'function.php';

class addPost {
	
    private $name;
	private $sujet;
	private $bdd;
	
	public function __construct($name,$sujet) {
		
		$this->sujet = htmlspecialchars($sujet);
	    $this->name = htmlspecialchars($name);
		$this->bdd = connexion_bdd();
		
	}
	
	public function verif() {
		
		   if(strlen($this->sujet) > 0) { /*Si on a bien un sujet*/
			   
			   return 'ok';
	
		   }
		   else
		   { /*Si on a pas de contenu*/
			   $erreur = 'Veuillez entrer le contenu du sujet';
			   return $erreur;
		   }
	
	}
	
	public function searchsujet () {
		
		$subject = $this->bdd->prepare('SELECT idsujet FROM sujet WHERE name = :name');
		$subject = execute(array('name'=>$this->name));
		
		return $subject;
		
	}
	
	public function insert() { 
		
		$requete2 = $this->bdd->prepare('INSERT INTO message(message,member_idmembre,date,sujet) VALUES(:message,:member_idmembre,NOW(),:sujet)');
		$requete2->execute(array('message'=> $this->sujet,'member_idmembre'=> $_SESSION['idmembre'],'sujet'=> $this->name));
		
		return 1;
			
    }
	 
}
?>