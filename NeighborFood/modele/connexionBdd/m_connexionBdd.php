<?php

function connexion_bdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=site internet;charset=utf8', 'root', '');
    return $bdd;

}


?>