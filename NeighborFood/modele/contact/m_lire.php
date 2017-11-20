<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";

// la fonction qui va recuperer les conversations
function recup_conversation()
{

    $bdd = connexion_bdd();
    $results= array();
    $reponse = $bdd->query("
	SELECT conversations_messages.pseudo_exp,
           conversations_messages.texte_message,
		   conversations_messages.date_message
		   FROM conversations_messages
		    INNER JOIN conversations_membres ON conversations_messages.id_conversations=conversations_membres.id_conversations
		   WHERE conversations_membres.pseudo_des='admin@gmail.com'
		   GROUP BY conversations_messages.id_conversations
		   ORDER BY conversations_messages.date_message DESC
	")or die(print_r($bdd->errorInfo()));

	while($row= $reponse->fetch())
    {
        $results[]=$row;
    }
	return $results;
}
?>