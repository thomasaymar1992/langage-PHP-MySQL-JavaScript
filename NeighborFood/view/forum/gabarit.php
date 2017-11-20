
<!DOCTYPE html>
  <head>
     <meta charset="utf-8" />
	 <link rel="stylesheet" type="text/css" href="../../view/css/forum/general.css" /> 
	 <title>Forum NeighborFood</title>
  </head>
  <body>
  
  <h1 class="messBienv"><?php echo $titre ?></h1>

  <div class="section">
  
   <br/><br/>
   
  <?php 
  
  if(isset($_SESSION['idmembre'])) {
  
  echo 'Bienvenue : '.$_SESSION['prenom'].' '.$_SESSION['nom'].' - <a href="../../controler/connexion/c_deconnexion.php">Deconnexion</a>';
  
  }
  else {
	  
  echo 'Bienvenue';
	  
  }
  ?>
  
  <?php echo $contenu  ?> 
		
  </div>
  </body>
  </html>