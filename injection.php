<?php
    require_once "bdd.php";

    $bdd = new Bdd();
    $mdp = $bdd->getMdp('" " OR 1 = //');

    
    var_dump($mdp);
    echo $mdp['mdp'];
    


?>