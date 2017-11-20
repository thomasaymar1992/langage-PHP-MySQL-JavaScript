<div id="produit" >


    Quantité = <?= $quantite ?><br/>
    Poids = <?= $weight ?> kg<br/>
    <div id="description">
        Description : <?= $description ?><br/><br/>
        <a href="/NeighborFood/controler/inscription/c_inscription.php">Acheter</a>

    </div>
    Prix = <?= $price ?> euros<br/>
    Catégorie : <?= $categories ?><br/><br/>
    Vendeur : <a href="/NeighborFood/controler/profil/c_profil.php?mail=<?=$email_des?>"> <?=$first_name?> <?= $name?></a><br/>
    <div id="image">
        <img src="<?= $photo ?>" class="photo" alt="arobas" style="width:230px;" />
    </div>

</div>