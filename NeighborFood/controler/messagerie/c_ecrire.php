<?php
session_start();
// si la personne modifie le contenue de la variable par un autre email
require_once "../../view/header/v_header.php";
require_once "../../view/menu/v_menuconnecte.php";
require_once "../../modele/messagerie/m_ecrire.php";

//$func= pseudo_incorect();

?>

<?php

$email = $_SESSION['mail'];
if(isset($_GET['emaildesti']) &&!empty($_GET['emaildesti']))
{

	if(isset($_POST['submit']))
	{

		$message=addslashes($_POST['message']);

			// si le champs message est vide 
			if(!empty($message))
			{
			 	creer_conversation($message, $email);
			 	?>
			 	 <div class='success'>Votre message a bien été envoyé</div>
			 	
			 	<?php
			}else{
			
				?>
				 <div class='error'>Le message est obligatoire</div>
				<?php
			}
	}
}else{
	header("location:/NeighborFood/controler/monCompte/c_monCompte.php ");
} 

?>




<form method='post' action=''>
	<p>
		<label for="emaildestinataire"> Envoyer à
		<input type="text" name="pseudo" id="pseudo"   value='<?php echo $_GET['emaildesti'];?>'    disabled='disabled'/> </label> 
		<label for="message"> Message
		<textarea rows='6' cols='30' name='message' id='message'></textarea> </label>
		<input type="submit"  value="Envoyer" name='submit'/>
	</p>

</form>