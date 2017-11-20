<?php

	session_start();
	session_unset();
	session_destroy();
	header('Location: /NeighborFood/controler/accueil/c_accueil.php');
?>