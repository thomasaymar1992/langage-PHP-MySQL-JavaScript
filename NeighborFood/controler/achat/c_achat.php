 <?php
	session_start();	
	
	$parPage = 3;
	require_once "../../view/header/v_header.php";
	if(isset($_SESSION['connecte'])){		
		require "../../view/menu/v_menuconnecte.php";
		require "../connexion/c_connecte.php";
	}else{
		 require "../../view/menu/v_menunonconnecte.php";
		 require "../connexion/c_non_connecte.php";
	}

	require_once "../../view/achat/v_achat.php";
	require_once "../../modele/achat/m_achat.php";
	if (isset($_GET['valider'])){
		htmlentities($idcateg = $_GET['categorie']);
        $nbrFruitCategorie = nbrFruitCategorie($idcateg);
        $nbrPageCategorie = ceil($nbrFruitCategorie/$parPage);
        if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p']<=$nbrPageCategorie){
            $pageCourrante = $_GET['p'];
        }else{
            $pageCourrante = 1;
        }
		$func = get_fruit_categorie(($pageCourrante-1)*$parPage, $parPage, $idcateg);
		$n=1;
		while($donnees = $func->fetch()){

			$quantite = $donnees['quantity'];
			$weight = $donnees['weight'];
			$description = $donnees['description'];
			$price = $donnees['price'];
			$name = $donnees['name'];
			$first_name = $donnees['first_name'];
			$email_des= $donnees ['email'];
			$categories = $donnees['categories'];
            $photo = $donnees['photo'];
            $idfruit = $donnees['idfruit'];
            $idcategorie = $donnees['idfruitvegcategorie'];
			require "../../view/achat/v_achat_gabarit.php";
            $n=$n+1;
		}
        for($i=1; $i<=$nbrPageCategorie; $i++){
            if($i==$pageCourrante){
                echo $i.'/ ';
            }else {
                echo "<a href='/NeighborFood/controler/achat/c_achat.php?p=$i&categorie=$idcateg&valider=Valider'>$i</a>/ ";
            }
        }
	}else{

        $nbrFruit = nbrFruit();

        $nbrPage = ceil($nbrFruit/$parPage);
        if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p']<=$nbrPage){
            $pageCourrante = $_GET['p'];
        }else{
            $pageCourrante = 1;
        }

		$func = get_fruit(($pageCourrante-1)*$parPage, $parPage);
        $n=1;
		while($donnees = $func->fetch()){
	
			$quantite = $donnees['quantity'];
			$weight = $donnees['weight'];
			$description = $donnees['description'];
			$price = $donnees['price'];
			$name = $donnees['name'];
			$first_name = $donnees['first_name'];
            $email_des= $donnees ['email'];
			$categories = $donnees['categories'];
            $photo = $donnees['photo'];
            $idfruit = $donnees['idfruit'];
            $idcategorie = $donnees['idfruitvegcategorie'];
			require "../../view/achat/v_achat_gabarit.php";
            $n=$n+1;
	
		}

        for($i=1; $i<=$nbrPage; $i++){
            if($i==$pageCourrante){
                echo $i.'/ ';
            }else {
                echo "<a href='/NeighborFood/controler/achat/c_achat.php?p=$i'>$i</a>/ ";
            }
        }
	}

    if(isset($_POST['1'])){
        $date = date("Y-m-d H:m:s");

        $idfruit = $GLOBALS['1'.$pageCourrante.'1'];
        $idcategorie = $GLOBALS['1'.$pageCourrante.'2'];
        $idmembre=$_SESSION['idmembre'];
        insert_panier($idfruit, $idmembre, $idcategorie, $date);
        echo '<script language="Javascript">
         <!--
         document.location.replace("/NeighborFood/controler/achat/c_achat.php?p=$pageCourrante");
         // -->
         </script>';


    }
     if(isset($_POST['2'])){

         $date = date("Y-m-d H:m:s");
         $idfruit = $GLOBALS['2'.$pageCourrante.'1'];
         $idcategorie = $GLOBALS['2'.$pageCourrante.'2'];
         $idmembre=$_SESSION['idmembre'];
         insert_panier($idfruit, $idmembre, $idcategorie, $date);
         echo '<script language="Javascript">
         <!--
         document.location.replace("/NeighborFood/controler/achat/c_achat.php?p=$pageCourrante");
         // -->
         </script>';



    }
    if(isset($_POST['3'])){
        $date = date("Y-m-d H:m:s");

        $idfruit = $GLOBALS['3'.$pageCourrante.'1'];
        $idcategorie = $GLOBALS['3'.$pageCourrante.'2'];
        $idmembre=$_SESSION['idmembre'];
        insert_panier($idfruit, $idmembre, $idcategorie, $date);
        echo '<script language="Javascript">
         <!--
         document.location.replace("/NeighborFood/controler/achat/c_achat.php?p=$pageCourrante");
         // -->
         </script>';


     }

	require_once "../../view/footer/v_footer.php";
	
?>