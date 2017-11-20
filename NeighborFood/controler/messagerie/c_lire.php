<?php
session_start();
require_once "../../view/header/v_header.php";
require_once "../../view/menu/v_menuconnecte.php";
require_once "../../modele/messagerie/m_lire.php";

$mail=$_SESSION['mail'];
$conversations=recup_conversation($mail);

    if($conversations==true)
    {
        foreach($conversations as $conversation )
        {
            ?>
            <div class='conversation'>
                <a href="/NeighborFood/controler/messagerie/c_message.php"><?php echo $conversation['pseudo_exp'];?></a>
                <p><a>Posté le : <?php echo date('d/m/Y à H:i:s',strtotime($conversation['date_message']));?></a></p>
            </div>
            <?php
        }

    }
    else
    {

        ?>
        <div class='error'>Vous n'avez pas de message</div>

        <?php

    }



?>