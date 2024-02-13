<?php 
class personn{

    public function addpersonn($nom, $motdepasse) {
        $query = sprintf("INSERT INTO inscription (nom, password) VALUES ('%s', '%s')", $nom, $motdepasse);
        return $query;
    }
    
    public function selectpersonn ($nom , $motdepasse){
        if ($nom !="" && $motdepasse!=""){
            $query = sprintf("select %s, %s from inscription", $nom , $motdepasse) ;
            return $query ;
        }
            return "" ;
    }
    public function checkpersonn($nom, $motdepasse) {
        if ($nom != "" && $motdepasse != "") {
            $query = sprintf("SELECT COUNT(*) FROM inscription WHERE nom = '%s' AND motdepasse = '%s'", $nom, $motdepasse);
            return $query;
        }
        return "";
    }
    public function deletepersonn (){

    }
}