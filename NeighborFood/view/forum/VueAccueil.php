<?php $titre = 'Bienvenue sur le forum Neighborfood'; ?>
<?php ob_start(); ?>

<?php foreach ($accueil as $categorie): ?>
	
<div class="categories">
				
<a href="../../controler/forum/index.php?categorie=<?php echo $categorie['name'];?>"><?php echo $categorie['name'];?></a>
				
</div>
	
<?php endforeach; ?>

<?php $contenu = ob_get_clean(); ?>

<?php require '../../view/forum/gabarit.php'; ?>