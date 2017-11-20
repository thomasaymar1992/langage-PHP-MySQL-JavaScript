<script type="text/javascript">
function AffCacheDiv(id){
    var bouton = document.getElementById('bouton_'+id);
    var fiche = document.getElementById('fiche_'+id);
    if(bouton.style.display == 'none'){
        bouton.style.display = 'block';
        fiche.innerHTML = 'cacher';
    }
    else{
        bouton.style.display = 'none';
        fiche.innerHTML = 'Fiche';
    }
}
</script>