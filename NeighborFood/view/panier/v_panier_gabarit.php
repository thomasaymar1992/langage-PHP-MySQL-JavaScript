<div id="produit" name="<?=$idfruit?>">


    quantité = <?= $quantite ?><br/>
    poids = <?= $weight ?> kg<br/>
    <div id="description">
        description : <?= $description ?><br/>
        <p> <a href="/NeighborFood/controler/messagerie/c_ecrire.php?emaildesti=<?=$mail?>">Envoyer un message</a></p>
    </div>
    Prix = <?= $price ?> euros<br/>
    catégorie : <?= $categories ?><br/><br/>
    Vendeur : <a href="/NeighborFood/controler/profil/c_profil.php?mail=<?=$mail?>"> <?=$first_name?> <?= $name?></a><br/><br/><br/>
    <div id="image">
        <img src="<?= $photo ?>" class="photo" alt="arobas" style="width:230px;" />
    </div>
    <input type="button" id="delete" value="supprimer" onclick="supprimer(<?=$idfruit?>)">
    <input type="button" id="buy" value="Acheter" onclick="acheter(<?=$idfruit?>)">

</div>