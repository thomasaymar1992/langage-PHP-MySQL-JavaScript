
<?php


    public function searchid($categorie) {
		
		$search = $this->bdd->prepare('SELECT idcategories_forum FROM categories_forum WHERE name = :name');
		$search->execute(array('name'=> $categorie));
		
		return $search;
		
	}
	
	public function searchsujet($titre) {
		
		$bdd = connexion_bdd();
		$subject = $this->bdd->prepare('SELECT idsujet FROM sujet WHERE name = :name');
		$subject = execute(array('name'=>$titre));
		
		return $subject;
	}

?>