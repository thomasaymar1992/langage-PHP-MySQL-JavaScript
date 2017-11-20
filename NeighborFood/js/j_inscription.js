
function desactivateTooltips() {

    var tooltips = document.querySelectorAll('.tooltip'),
        tooltipsLength = tooltips.length;

    for (var i = 0 ; i < tooltipsLength ; i++) {
        tooltips[i].style.display = 'none';
    }

}
function isEmail(myVar){
    // La 1ère étape consiste à définir l'expression régulière d'une adresse email
    var regEmail = new RegExp('^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$','i');

    return regEmail.test(myVar);
}




    var check = {};

check['nom']=function(){
    var nom = document.getElementById('nom');

    if(nom.value.length>=4 || nom.value.length == 0){
        nom.className = 'correct';
        document.getElementById('tooltipNomPrenom').style.display = 'none';

        return true;
    }else{
        nom.className = 'incorrect';
        document.getElementById('tooltipNomPrenom').style.display = 'inline-block';

        return false;
    }

}

check['prenom']=function(){

    var prenom = document.getElementById('prenom');

    if(prenom.value.length>=4 || prenom.value.length == 0){
        prenom.className = 'correct';
        document.getElementById('tooltipNomPrenom').style.display = 'none';

        return true;
    }else{
        prenom.className = 'incorrect';
        document.getElementById('tooltipNomPrenom').style.display = 'inline-block';

        return false;
    }
}

check['mail']=function() {

    var email = document.getElementById('mail');

    if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,6}$/.test(email.value)|| email.value.length == 0) {
        email.className = 'correct';
        document.getElementById('tooltipMail').style.display = 'none';

        return true;
    } else {
        email.className = 'incorrect';
        document.getElementById('tooltipMail').style.display = 'inline-block';

        return false;
    }

}

check['telephone']=function(){
    var telephone = document.getElementById('telephone').value;
    var a = '';
    for (i=0;i<telephone.length;i++)
    {
        if (telephone.charAt(i)!=' '){a+=telephone.charAt(i);}
    }
    telephone = a;

    if(/^0[0-9]{9}$/.test(telephone)|| telephone.length == 0){
        telephone.className = 'correct';
        document.getElementById('tooltipTelephone').style.display = 'none';
    }else{
        telephone.className = 'incorrect';
        document.getElementById('tooltipTelephone').style.display = 'inline-block';
    }
}

check['mdp']=function(){
    var mdp = document.getElementById('mdp');

    if(mdp.value.length >=4 || mdp.value.length == 0){
        mdp.className = 'correct';
        document.getElementById('tooltipMdp').style.display = 'none';
    }else{
        mdp.className = 'incorrect';
        document.getElementById('tooltipMdp').style.display = 'inline-block';
    }
}

check['conf_mdp']=function(){

    var mdp =document.getElementById('mdp'),
        conf_mdp = document.getElementById('conf_mdp');


    if(mdp.value == conf_mdp.value || conf_mdp.value.length == 0){
        conf_mdp.className = 'correct';
        document.getElementById('tooltipCMdp').style.display = 'none';
    }else{
        conf_mdp.className = 'incorrect';
        document.getElementById('tooltipCMdp').style.display = 'inline-block';
    }

}

function go() { // Utilisation d'une IIFE pour éviter les variables globales.

    var myForm = document.getElementById('myForm'),
        inputs = document.querySelectorAll('input[type=text], input[type=password]'),
        inputsLength = inputs.length;

    for (var i = 0 ; i < inputsLength ; i++) {
        inputs[i].addEventListener('keyup', function(e) {
            check[e.target.id](e.target.id); // "e.target" représente l'input actuellement modifié
        }, false);
    }

}
go();
desactivateTooltips();

/**
 * Created by Armel on 11/05/2015.
 */
