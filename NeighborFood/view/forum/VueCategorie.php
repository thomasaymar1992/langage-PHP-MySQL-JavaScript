<?php $titre = 'Bienvenue sur le forum Neighborfood'; ?>

<?php ob_start(); ?>

<div class="categories">
				
<?php echo $_GET['categorie'];?>
				
</div>

<?php 

if(isset($_SESSION['idmembre'])) {

$categorie = $_GET['categorie'];
echo '<a href="../../controler/forum/CtrlAddSujet.php?categorie='.$categorie.'">Ajouter un sujet</a>';

}

?> 

<?php foreach ($sujets as $sujet): ?>
	
<div class="sujet">
				
<a href="../../controler/forum/index.php?sujet=<?php echo $sujet['name']; ?>"><h1><?php echo $sujet['name']; ?></h1></a>
				
</div>
	
<?php endforeach; ?>

<?php $contenu = ob_get_clean(); ?>

<?php require '../../view/forum/gabarit.php'; ?>
	

	
	