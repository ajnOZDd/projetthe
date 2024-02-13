<?php

class inscriptionlogincontr {
    private connexion $connexion ;
    private personn $personn ;
    public function __construct() {
    $connexion = new connexion("localhost", "projetthe", "allan", "etherion") ;
        
    }
    public function setinscriptioncontroller(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nom =$_POST["nom"] ;  
        $motdepasse= $_POST["password"] ;   
        $con=$this->connexion->setConnexion() ;
        $query=$this->personn->addpersonn($nom, $motdepasse) ;
        $prepare=$con->prepare($query) ;
        $prepare->execute() ;
        }
        
    }

    public function getinscriptioncontroller (){

        $con=$this->connexion->setConnexion() ;
        $query=$this->personn->selectpersonn() ;
        $prepare=$con->prepare($query) ;
        $prepare->execute() ;
        
    }
}