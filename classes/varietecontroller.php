<?php
require "../base/connection.php" ;
require "../classes/variete.php" ;
class varietecontroller {

    private connexion $connexion ;
    private variete $variete ;
    
    public function __construct() {
    }    
    
    public function setvariete (){
      $this->connexion = new connexion() ;
      $con = $this->connexion->default() ;
      $this->variete = new variete() ;
      
      $nomvariete = $_POST["nomvariete"];
      $occupationparpied =$_POST["occupationParPied"];
      $rendementparpied = $_POST["rendementParPied"];
      $query =$this->variete->addvariete($nomvariete, $occupationparpied , $rendementparpied) ;
      $prepare=$con->prepare($query) ;
      $prepare->execute() ;
    }
    
}

?>