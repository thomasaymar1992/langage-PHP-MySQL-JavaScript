<?php
require_once "../../view/header/v_header.php";
require_once "../../modele/admin/m_categorie_ajout.php";
if(isset($_POST['valider'])){
    $categorie = $_POST['categorie'];
    $photo = $_POST['photo'];
    ajout_categorie($categorie, $photo);
    header('Location: /NeighborFood/controler/admin/c_categorie.php');
}else {
    require_once "../../view/admin/v_categorie_ajout.php";
}
require "../connexion/c_admin_connecte.php";
require_once "../../view/footer/v_footer.php";
?>