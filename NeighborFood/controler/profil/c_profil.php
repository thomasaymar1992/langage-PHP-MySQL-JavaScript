<?php
session_start();

require "../../view/header/v_header.php";
require "../../modele/profil/m_profil.php";
$mail=$_GET['mail'];
$info = get_info($mail);
$prenom = $info['first_name'];
$nom = $info['name'];
$email = $info['email'];
$telephone = $info['phone'];
$adresse = $info['adresse'];
if(isset($_SESSION['connecte'])){
    require "../../view/menu/v_menuconnecte.php";
    require "../connexion/c_connecte.php";

}else{
    require "../../view/menu/v_menunonconnecte.php";

    require "../connexion/c_non_connecte.php";

}
require "../../view/profil/v_profil.php";
require "../../view/footer/v_footer.php";