<head>

    <link rel="stylesheet" href="/NeighborFood/view/css/monCompte/monCompte.css" /> <!-- associe cette page au page css stylessheet-->

</head>



<form  name="modifier_mdp" method="post" action="/NeighborFood/controler/monCompte/c_monCompte.php">
    <table id="modifier">
        <tr><td><label for="old_mdp">Donner votre ancien mot de passe</label> : <input type="password" name="old_mdp"/></tr></td>
        <tr><td><label for="new_mdp">Nouveau mot de passe</label> : <input type="password" name="new_mdp"/></tr></td>
        <tr><td><label for="conf_new_mdp">Confirmer Nouveau mot de passe</label> : <input type="password" name="conf_new_mdp"/></tr></td>
    </table>

    <input type="submit" name="stop" value="Annuler" class="bouton"/>
    <input type="submit" name="validerMdp" value="Valider" class="bouton"/>
</form>