<?php
session_start();
require_once "../../view/header/v_header.php";
require_once "../../view/menu/v_menuadmin.php";
require_once "../../modele/contact/m_lire.php";


$conversations=recup_conversation();

    if($conversations==true)
    {  
        foreach($conversations as $conversation )
        {
            ?>
            <div class='conversation'>
                <a href="/NeighborFood/controler/contact/c_message.php"><?php echo $conversation['pseudo_exp'];?></a>
                <p><a>Posté le : <?php echo date('d/m/Y à H:i:s',strtotime($conversation['date_message']));?></a></p>
            </div>
            <?php
        }

    }
    else
    {
    	echo 'verification';
        ?>
        <div class='error'>Vous n'avez pas de message</div>
        <?php

    }



?>