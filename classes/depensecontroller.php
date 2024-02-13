<?php
require "../base/connection.php" ;
require "../classes/depense.php" ;
class depensecontroller{
    private connexion $connexion ;
    private depense $depense ;
    
    public function setdepense (){
        $this->connexion = new connexion() ;
        $con = $this->connexion->default() ;
        $this->depense= new depense () ;
        $dateDepense= $_POST["dateDepense"] ;
        $idCategorieDepense = $_POST["idCategorieDepense"] ; 
        $montant =$_POST["montant"] ;
        $query =$this->depense->adddepense($dateDepense, $idCategorieDepense, $montant) ;
        $prepare=$con->prepare($query) ;
        $prepare->execute() ;
    }
}