<?php $titre = 'Ajouter un sujet'; ?>
<?php ob_start(); ?>

<form method="post" action="../../controler/forum/CtrlAddSujet.php?categorie=<?php echo $_GET['categorie'];?>">   
<p>
<input name="name" type="text" placeholder="Nom du sujet..." size="52" required/><br/>
<textarea name="sujet" placeholder="Contenu du sujet..." cols="40" rows="10"></textarea><br/>
<input name="categorie" type="hidden" value="<?php echo $_GET['categorie'];?>" />
<input type="submit" value="Ajouter le sujet"/>
</p>
</form>

<?php $contenu = ob_get_clean(); ?>
<?php require '../../view/forum/gabarit.php'; ?>

	