<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";

//fonction qui va recuperer les messages
function recup_message($email)
{

    $bdd = connexion_bdd();
    $message=array();
    $reponse = $bdd->query("
    SELECT date_message,
           texte_message
           FROM conversations_messages
           INNER JOIN conversations_membres ON conversations_messages.id_conversations=conversations_membres.id_conversations
           WHERE conversations_membres.pseudo_des='".$email."'
           ORDER BY conversations_messages.date_message DESC
        ")or die(print_r($bdd->errorInfo()));

    while($row= $reponse->fetch())
    {
        $message[]=$row;
    }
    return $message;






}

?>