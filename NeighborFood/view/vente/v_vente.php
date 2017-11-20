<head>

    <link rel="stylesheet" href="/NeighborFood/view/css/vente/vente.css" /> <!-- associe cette page au page css stylessheet-->

</head>
	<h2>VENDRE</h2>
	<form name="vente" method="post" action="/NeighborFood/controler/vente/c_vente.php">
	<table  id="vente" >
	
		<tr><td><label for="quantity">Quantité</label> : <input type="number" name="quantite" id="quantity"/></tr></td>
		<tr><td><label for="weight">Poids</label> : <input type="number" name='poids' id="weight"/> Kg</tr></td>
		<tr><td><label for="description">Description du produit</label><br />
			<textarea name="description" id="description" cols="45" rows="5"></textarea></tr></td>
		<tr><td><label for="price">Prix</label> : <input type="number" name="prix" id="prix"/> Euros/Kg</tr></td>
		<tr><td>Voulez-vous vendre ou échanger votre produit ?<br/>
			<input type="radio" name="buyorchange" value="buy" id="buy" /> <label for="buy">A vendre</label><br />
			<input type="radio" name="buyorchange" value="change" id="change" /> <label for="change">A échanger</label></tr></td>
		
		<tr><td><label for="categorie">Choisissez votre catégorie</label><br />
			<select name="categorie" id="categorie">
		<?php
        require_once "../../modele/connexionBdd/m_connexionBdd.php";
        $bdd = connexion_bdd();
			$reponse = $bdd->query('SELECT categories, idfruitvegcategorie FROM fruitvegcategory');			
			
			while ($donnees = $reponse->fetch()){
			$categorie = $donnees['categories'];
			$idcategorie = $donnees['idfruitvegcategorie'];
			
				echo '<option value="' .$idcategorie .'"">' .$categorie .'</option>';				
			}
			$reponse->closeCursor();
		?>
		</select></tr></td>
	
	</table>
		<input type="reset" name="stop" value="Annuler" class="bouton"/>
		<input type="submit" name="valider" value="Valider" class="bouton"/>
	</form>
	