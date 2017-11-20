<?php
session_start();
require_once "../../view/header/v_header.php";
require_once "../../view/menu/v_menuconnecte.php";
require_once "../../modele/messagerie/m_message.php";


$messages=recup_message();
foreach($messages as $message)
{
    ?>
        <div class='messages'>
            <p><em><?php echo $message['texte_message'];?></em></p>
        </div>
    <?php

}
?>
