<?php
require "../base/connection.php" ;
require "../classes/cueilleur.php" ;
class ceuilleurcontroller{
    private connexion $connexion ;
    private cueilleur $cueiller ;
    
    public function setcueilleur (){
        $this->connexion = new connexion() ;
        $con = $this->connexion->default() ;
        $this->cueiller= new cueilleur() ;
        $nomcueilleur= $_POST["nomCueilleur"] ;
        $genreceuilleur = $_POST["genre"] ; 
        $datenaissance =$_POST["dateNaissance"] ;
        $query =$this->cueiller->addcueilleure($nomcueilleur, $genreceuilleur, $datenaissance) ;
        $prepare=$con->prepare($query) ;
        $prepare->execute() ;
      }
}