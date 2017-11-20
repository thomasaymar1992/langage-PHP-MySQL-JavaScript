<?php
session_start();
require_once "../../view/header/v_header.php";
require_once "../../modele/contact/m_message.php";

?>
<?php
	$email = 'admin@gmail.com';
$messages=recup_message($email);
foreach($messages as $message)
{
    ?>
        <div class='messages'>
            <p><em><?php echo $message['texte_message'];?></em></p>
        </div>
    <?php

}
?>
