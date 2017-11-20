<?php 
 htmlentities($mdp=$_POST['mdp']);
 htmlentities($mail=$_POST['mail']);
 require "../../modele/connexion/m_connexion.php";
$name=get_namefirstname($mail);
if(password_verify($mdp, get_password($mail)) && $mail =='admin@gmail.com'){
    session_start();
    header('Location: /NeighborFood/controler/admin/c_admin.php');
}
 elseif(password_verify($mdp, get_password($mail))){
	 session_start();
		$_SESSION['nom']=$name['name'];
		$_SESSION['prenom']=$name['first_name'];
		$_SESSION['mail']=$mail;
		$_SESSION['mdp']=$mdp;
        $_SESSION['idmembre']=$name['idmembre'];
		$_SESSION['connecte']=True;
	header('Location: /NeighborFood/controler/accueil/c_accueil.php');
}
 else{ header('Location: /NeighborFood/controler/accueil/c_accueil.php');
 } 
 ?>