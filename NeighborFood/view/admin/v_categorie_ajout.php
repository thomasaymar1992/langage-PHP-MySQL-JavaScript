<head>

    <link rel="stylesheet" href="/NeighborFood/view/css/admin/admincategorie.css" />

</head>

<form id="categorie_ajout" method="post" action="/NeighborFood/controler/admin/c_categorie_ajout.php">
    <table>
        <tr><td>Catégorie : <input type="text" name="categorie"></td></tr>
        <tr><td>Lien vers la photo : <input type="text" name="photo" value="/NeighborFood/view/image/images_fruits/"></td></tr>
    </table>
    <input type="submit" class ="boutton" value="valider" name="valider">
</form>