<?php $titre = 'Bienvenue sur le forum Neighborfood'; ?>
<?php ob_start(); ?>

<div class="sujet">
				
<?php echo $_GET['sujet'];?>
				
</div>

<?php foreach ($posts as $post): ?>
	
<div class="post">
     
<?php 

$membres = getMember($post['member_idmembre']);
	
echo $membres['first_name']. ' ' .$membres['name'];
				 
echo '<br/>';
				 
echo $post['message']; 
				 
?>
				 
</div>
	
<?php endforeach; ?>

<br/>

<?php

if(isset($_SESSION['idmembre'])) {

$sujet = $_GET['sujet'];
echo '<form method="post" action="../../controler/forum/index.php?sujet='.$sujet.'">
      <input  name="name" type="hidden" value="'.$sujet.'" /><br/>;
      <textarea name="sujet" cols="50" rows="10" placeholder="Votre message..."></textarea><br/>;
      <input type="submit" value="Ajouter a la conversation"/>';
	  
}

?>

<?php require '../../controler/forum/CtrlAddPost.php'; ?>

</form>

<?php $contenu = ob_get_clean(); ?>
<?php require '../../view/forum/gabarit.php'; ?>
	