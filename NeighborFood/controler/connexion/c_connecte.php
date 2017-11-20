<?php
	
		echo ' <div id="connecte"> '.$_SESSION['nom'].'<br/>'.$_SESSION['prenom'];
		echo' <form name="deconnexion"method="post" action="/NeighborFood/controler/connexion/c_deconnexion.php">
			<input type="submit" name="deco"  value="Se deconnecter" class="bouton"/>
			</form>
			 </div>';
	
?>	