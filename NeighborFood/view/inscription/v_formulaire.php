
<head>

    <link rel="stylesheet" href="/NeighborFood/view/css/inscription/inscription.css" /> <!-- associe cette page au page css stylessheet-->

</head>
<h2>INSCRIPTION</h2>
<aside class="profil">

</aside>




<form name="formulaire" id="myForm"  method="post" action="/NeighborFood/controler/inscription/c_inscription.php">

    <table  id ="formulaire" >
        <tr><td><label for="nom">Nom : <input type="text" name="nom" id="nom" placeholder="Nom"/></label>*</tr></td>
        <span class="tooltip" id="tooltipNomPrenom">Un nom doit contenir au moins 4 lettres</span>

        <tr><td><label for="prenom">Prénom</label> : <input type="text" name="prenom" id="prenom" placeholder="Prénom"/>*</tr></td>
        <span class="tooltip" id="tooltipNomPrenom">Un nom doit contenir au moins 4 lettres</span>

        <tr><td><label for="mail">Adresse mail</label> : <input type="text" name="mail" id="mail" placeholder="adresse@email.com"/>*</tr></td>
        <span class="tooltip" id="tooltipMail">L'adresse mail n'est pas valide</span>

        <tr><td><label for="adresse">Telephone</label> : <input type="text" name="telephone" id="telephone" placeholder="07 77 77 77 77"/>*</tr></td>
        <span class="tooltip" id="tooltipTelephone">Le numéro de téléphone n'est pas valide</span>

        <tr><td><label for="postal">Adresse</label> : <input type="tel" name="adresse" id="postal" placeholder="35 rue du chateau 53600 trou-ville"/>*</tr></td>

        <tr><td><label for="mdp">Mot de passe</label> : <input type="password" name="mdp" id="mdp" placeholder="MotDePasse"/>*</tr></td>
        <span class="tooltip" id="tooltipMdp">Le mot de passe doit avoir au moins quatre caractères</span>

        <tr><td><label for="conf_mdp">Confirmer mot de passe</label> : <input type="password" name="conf_mdp" id="conf_mdp" placeholder="ConfirmerMotDePasse"/>*</tr></td>
        <span class="tooltip" id="tooltipCMdp">Les deux mots de passe doivent être identiques</span>

    </table>
    <input type="reset" name="stop" value="Annuler" class="bouton"/>
    <input type="submit" name="valider" value="Inscription" class="bouton" onclick="inscription()"/>


</form>
* champ obligatoire
<script src="/NeighborFood/js/j_inscription.js"></script>
<script>
    function inscription(){
        alert("Votre compte est bien enregistré")
    }
</script>