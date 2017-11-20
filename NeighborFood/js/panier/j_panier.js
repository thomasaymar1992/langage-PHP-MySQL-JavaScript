/**
 * Created by Armel on 03/06/2015.
 */
src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"

function supprimer(idfruit){
    $.get(
        '/NeighborFood/modele/panier/m_supprimerFruit.php',
        {idfruit: idfruit},
        function (data) {
            if(data.length >5) {
                alert("Le fruit n'a pas été supprimé");
                alert(data);
            }else{
                alert("Le fruit a été supprimé");
                document.getElementsByName(idfruit)[0].style.display = 'none';
            }
        }
    )
}

function acheter(idfruit){
    $.get(
        '/NeighborFood/modele/panier/m_acheterFruit.php',
        {idfruit: idfruit},
        function(data){
            if(data.length >5){
                alert("Le fruit n'a pas été acheté");
                alert(data);
            }else{
                alert("Le fruit a bien été acheté");
                document.getElementsByName(idfruit)[0].style.display = 'none';
            }
        }
    )
}