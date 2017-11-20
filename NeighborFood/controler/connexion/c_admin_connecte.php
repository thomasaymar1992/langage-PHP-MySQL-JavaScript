<?php
echo' <form name="deconnexion"method="post" action="/NeighborFood/controler/connexion/c_deconnexion.php">
         <input type="submit" name="deco"  value="Se deconnecter" class="bouton" onclick="deconnecter()" />
         </form>
          </div>';
?>
<script>
    function deconnecter() {
        alert("Vous etes deconnecté")
    }
</script>