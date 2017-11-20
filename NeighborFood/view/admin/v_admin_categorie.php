<head>

    <link rel="stylesheet" href="/NeighborFood/view/css/admin/admincategorie.css" />

</head>

<?php
require_once "../../modele/connexionBdd/m_connexionBdd.php";
$bdd = connexion_bdd();
$reponse = $bdd->query('SELECT categories, idfruitvegcategorie FROM fruitvegcategory');
echo ('<h2>Catégories</h2>');
while ($donnees = $reponse->fetch()){
    $categorie = $donnees['categories'];
    $idcategorie = $donnees['idfruitvegcategorie'];

    echo '<option id="categorie" value="' .$idcategorie .'"">' .$categorie .'</option>';
}
$reponse->closeCursor();
?>

<a href="/NeighborFood/controler/admin/c_categorie_ajout.php" id="lien">Ajouter une catégorie</a>