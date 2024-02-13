<?php
session_start() ;
require "../base/connection.php" ;
require "../classes/personn.php" ;
class fonctioninscriptionlogincontr {
    private connexion $connexion ;
    private personn $personn ;
    public function __construct() {
        $this->connexion = new connexion("172.20.0.167", "db_p16_ETU002636", "ETU002636", "82QLFCPJGlxS") ;
        
    }

    public function testco (){
        try {
        $con=$this->connexion->setConnexion() ;
            
        } catch (PDOException $th) {
            echo $th->getMessage();

        }
        
    }
    public function setinscriptioncontroller(){
            $nom =$_POST["nominscription"] ;  
            $motdepasse= $_POST["passwordinscription"] ; 
            if ($nom!="" && $motdepasse!=""){
                $this->personn = new personn ()  ;
                $con=$this->connexion->setConnexion() ;
                $query=$this->personn->addpersonn($nom, $motdepasse) ;
                $prepare=$con->prepare($query) ;
                $prepare->execute() ;
            }
        
    }

    public function getinscriptioncontroller() {
        $nomlogin = $_POST["nomlogin"];
        $mdp = $_POST["passwordlogin"];
    
        $con = $this->connexion->setConnexion();
        $query = sprintf("SELECT * FROM inscription WHERE nom = '%s' AND password = '%s'", $nomlogin, $mdp);
        $prepare = $con->prepare($query);
        $prepare->execute();
    
        $result = $prepare->fetch(PDO::FETCH_ASSOC);
    
        if ($result) {
            echo $result["nom"] ;
            echo $result["password"] ;
            $_SESSION["getvalue"] = [$result["nom"], $result["password"]] ;
            header("location:../view/admin.php") ;
        } else {
           
            echo "Identifiants invalides.";
        }
    }


}
