<div id="produit" >


	    Quantité = <?= $quantite ?><br/>
	    Poids = <?= $weight ?> kg<br/>
	   <div id="description">
	     Description : <?= $description ?><br/>
           <?php $GLOBALS[''.$n.$pageCourrante.'1'.'']=$idfruit;
                    $GLOBALS[''.$n.$pageCourrante.'2'.'']=$idcategorie;
                    ;?>
           <form method="post" action="/NeighborFood/controler/achat/c_achat.php?p=<?=$pageCourrante?>">
           <input type="submit" name="<?=$n?>" value="Ajouter au panier" id="acheter">
           </form>
           
           <p> <a href="/NeighborFood/controler/messagerie/c_ecrire.php?emaildesti=<?=$email_des?>">Envoyer un message</a></p>
       </div>
	    Prix = <?= $price ?> euros<br/>
        Catégorie : <?= $categories ?><br/><br/>
        Vendeur : <a href="/NeighborFood/controler/profil/c_profil.php?mail=<?=$email_des?>"> <?=$first_name?> <?= $name?></a><br/>
<div id="image">
    <img src="<?= $photo ?>" class="photo" alt="arobas" style="width:230px;" />
</div>

</div>