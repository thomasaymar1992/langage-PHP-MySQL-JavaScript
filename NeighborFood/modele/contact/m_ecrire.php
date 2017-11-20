<?php

require_once "../../modele/connexionBdd/m_connexionBdd.php";
// la fonction de verifier si l'email existe
/*
function pseudo_incorect()
{
 $bdd = connexion_bdd();
$reponse = $bdd->query('
SELECT COUNT (member.email) FROM member 
WHERE $email_des='$_GET['email']'
')
return mysql_result($reponse,0);
}
*/

// fonction qui va créer la conversation et le message qui va avec 

function creer_conversation($message, $email)
{

$bdd = connexion_bdd();

    $reponse = $bdd->query("INSERT INTO conversations_messages (id_conversations,pseudo_exp,texte_message,date_message)
                      VALUES('','$email','$message',NOW()
                                          )")or die(print_r($bdd->errorInfo()));

					



    $reponse = $bdd->query(" INSERT INTO conversations_membres (id_conversations,pseudo_des)
						VALUES('',
                                          'admin@gmail.com'
                                          )")or die(print_r($bdd->errorInfo()));


 
}


?>