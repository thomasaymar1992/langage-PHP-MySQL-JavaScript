<?php

if(isset($_POST['name']) AND isset($_POST['sujet'])) {
	
require_once '../../modele/forum/addPost.class.php';

$addPost = new addPost($_POST['name'],$_POST['sujet']);
$verif = $addPost->verif();

if($verif == "ok") {
		
if($addPost->insert()) {
				
header('Location:index.php?sujet='.$_POST['name']);

}	

}
else { 

$erreur = $verif;

}

if(isset($erreur)) {
					 
echo $erreur;

}

}