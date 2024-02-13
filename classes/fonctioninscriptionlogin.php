<?php
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
        $mdp = $_POST["motdepasselogin"];
    
        if (!empty($nomlogin) && !empty($mdp)) {
            $con = $this->connexion->setConnexion();
    
            $personn = new personn();
            $checkQuery = $personn->checkpersonn($nomlogin, $mdp);
            $checkPrepare = $con->prepare($checkQuery);
            $checkPrepare->execute();
    
            $rowCount = $checkPrepare->fetchColumn();
    
            if ($rowCount > 0) {
                $query = $personn->selectpersonn($nomlogin, $mdp);
                $prepare = $con->prepare($query);
                $prepare->execute();
    
            } else {
                echo "Nom de connexion ou mot de passe incorrect.";
            }
        } else {
            echo "Veuillez fournir un nom de connexion et un mot de passe.";
        }
    }


}
