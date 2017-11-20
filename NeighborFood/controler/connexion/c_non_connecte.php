<?php
echo'
        <h2> Se connecter</h2>
		<form name="connexion" method="post"  action="/NeighborFood/controler/connexion/c_connexion.php">
			<table id="non_connecte">
				<tr><td><label for="mail">Mail</label> : <input type="text" name="mail" id="mail" /></tr></td>
				<tr><td><label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" /></tr></td>
			</table>
				<input type="submit" name="valider" value="Se connecter" class="bouton"/>
		</form>';
?>