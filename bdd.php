<?php 

Class Bdd {

    private $bdd;

    function __construct(){

        try {  

            $this->bdd = new PDO("mysql:dbname=injection;host=127.0.0.1", "root", "root");
            
        } catch (PDOException $e){

            echo $e->getMessage();

        }
    }

    function getAllPrenom() {
        $sql = "SELECT prenom, mdp
                FROM user";
        $sth = $this->bdd->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }

    function getMdp($prenom) {
        $sql = "SELECT mdp
                FROM user
                WHERE prenom = :prenom";
        $sth = $this->bdd->prepare($sql);
        $sth->execute([':prenom' => $prenom ]);
        return $sth->fetch();
    }

    
}
