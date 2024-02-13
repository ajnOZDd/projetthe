<?php
require "../base/connection.php" ;
require "../classes/depense.php" ;
class ceuilleurcontroller{
    private connexion $connexion ;
    private depense $depense ;
    
    public function setcueilleur (){
        $this->connexion = new connexion() ;
        $con = $this->connexion->default() ;
        $this->depense= new depense () ;
        $nomcueilleur= $_POST["nomCueilleur"] ;
        $genreceuilleur = $_POST["genre"] ; 
        $datenaissance =$_POST["dateNaissance"] ;
        $query =$this->depense->adddepense($nomcueilleur, $genreceuilleur, $datenaissance) ;
        $prepare=$con->prepare($query) ;
        $prepare->execute() ;
    }
}