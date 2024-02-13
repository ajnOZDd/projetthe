<?php 
class personn{
    public function addpersonn ($nom , $motdepasse){
        if ($nom !="" && $motdepasse!=""){
        $query = sprintf("insert into inscription (nom , motdepasse) values (%s, %s)", $nom , $motdepasse) ;
        return $query ;
        }
        return "" ;

    }

    public function selectpersonn ($nom , $motdepasse){
        if ($nom !="" && $motdepasse!=""){
            $query = sprintf("select %s, %s from inscription", $nom , $motdepasse) ;
            return $query ;
        }
            return "" ;
    }

    public function deletepersonn (){

    }
}