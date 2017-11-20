<div id='infos'>
	<br/>
	Prénom : <?= $prenom ?> <br/>
	Nom : <?= $nom ?><br/>
	Email : <?= $email ?> <br/>
	Téléphone : <?= $telephone ?> <br/>
	Adresse : <?= $adresse ?> <br/>
	Mot de Passe : ********** <br/><br/><br/>
	
	<form name="bouton" method="post" action="/NeighborFood/controler/monCompte/c_monCompte.php">
		<input type="submit" name="modifier" value="Modifier mes informations" class="bouton">
        <input type="submit" name="modifier_mdp" value="Modifier mon mot de passe" class="bouton">
	</form>
	
</div>
	