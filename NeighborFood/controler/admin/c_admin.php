<?php


require "../../view/header/v_header.php";
require "../../modele/admin/m_admin.php";
require "../../view/menu/v_menuadmin.php";

$func = getuser();
require "../../view/admin/v_admin.php";
while ( $donnee = $func->fetch()){
    $name = $donnee['name'];
    $first_name = $donnee['first_name'];
    $email = $donnee['email'];
    $idmembre = $donnee['idmembre'];
    require"../../view/admin/v_admin_gabarit.php";
}
require "../../view/admin/v_admin_finTableau.php";
require "../connexion/c_admin_connecte.php";
require "../../view/footer/v_footer.php";


?>