<?php
require "../base/connection.php" ;
require "../classes/parcelle.php" ;
class parcellecontroller {

    private connexion $connexion ;
    private parcelle $parcelle ;
    
    public function __construct() {
    }    
    
    public function setparcell (){
      $this->connexion = new connexion() ;
      $con = $this->connexion->default() ;
      $totalpiedparcelle = $_POST["totalpiedparcelle"];
      $numeroparcelle =$_POST["numeroparcelle"];
      $surfacehectare = $_POST["surfacehectare"];
      $idvariete = $_POST["idvariete"];
      $query =$this->parcelle->addparcel($totalpiedparcelle, $numeroparcelle , $surfacehectare, $idvariete) ;
      $prepare=$con->prepare($query) ;
      $prepare->execute() ;
    }
    
}

?>