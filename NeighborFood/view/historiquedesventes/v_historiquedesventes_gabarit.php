<div id="produit" name="<?=$idfruit?>">


    quantité = <?= $quantite ?><br/>
    poids = <?= $weight ?> kg<br/>
    <div id="description">
        description : <?= $description ?><br/><br/>
        Acheteur : <?=$acheteur_prenom?> <?=$acheteur_nom?><br/>
        <p> <a href="/NeighborFood/controler/messagerie/c_ecrire.php?emaildesti=<?=$mail?>">Envoyer un message</a></p>
    </div>
    Prix = <?= $price ?> euros<br/>
    catégorie : <?= $categories ?><br/>
    <div id="image">
        <img src="<?= $photo ?>" class="photo" alt="arobas" style="width:230px;" />
    </div>


</div>