<?php
session_start() ;
require "../base/connection.php" ;
require "../classes/personn.php" ;
class fonctioninscriptionlogincontr {
    private connexion $connexion ;
    private personn $personn ;
    public function __construct() {
        $this->connexion = new connexion() ;
        
    }

    public function testco (){
        try {
        $con=$this->connexion->default();
            
        } catch (PDOException $th) {
            echo $th->getMessage();

        }
        
    }
    public function setinscriptioncontroller(){
            $nom =$_POST["nominscription"] ;  
            $motdepasse= $_POST["passwordinscription"] ; 
            if ($nom!="" && $motdepasse!=""){
                $this->personn = new personn ()  ;
                $con=$this->connexion->default() ;
                $query=$this->personn->addpersonn($nom, $motdepasse) ;
                $prepare=$con->prepare($query) ;
                $prepare->execute() ;
            }
        
    }

    public function getinscriptioncontroller() {
        $nomlogin = $_POST["nomlogin"];
        $mdp = $_POST["passwordlogin"];
    
        $con = $this->connexion->default();
        $query = sprintf("SELECT * FROM inscription WHERE nom = '%s' AND password = '%s'", $nomlogin, $mdp);
        $prepare = $con->prepare($query);
        $prepare->execute();
    
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
    
        if ($result) {
            echo $result["nom"] ;
            echo $result["password"] ;
            $_SESSION["getvalue"] = [$result["nom"], $result["password"]] ;
            header("location:../view/acceuil.php") ;
        } else {
           
            echo "Identifiants invalides.";
        }
    }


}
