<?php

class depense {
    private $datedepense;
    private $idcategoriedepense;
    private $montant;

    public function __construct() {
        
    }

    public function setDatedepense($datedepense) {
        $this->datedepense = $datedepense;
    }

    public function getDatedepense() {
        return $this->datedepense;
    }

    public function setIdcategoriedepense($idcategoriedepense) {
        $this->idcategoriedepense = $idcategoriedepense;
    }

    public function getIdcategoriedepense() {
        return $this->idcategoriedepense;
    }

    public function setMontant($montant) {
        $this->montant = $montant;
    }

    public function getMontant() {
        return $this->montant;
    }

    public function adddepense ($datedepense ,$idcategoriedepense , $montant){
            $this->setDatedepense($datedepense) ;
            $this->setIdcategoriedepense($idcategoriedepense) ;
            $this->setMontant($montant) ;
            $query = sprintf(
            "INSERT INTO cueilleur(nomCueilleur, genre, dateNaissance) values ('%s' , '%s' , '%s')",
             $this->getDatedepense(),
             $this->getIdcategoriedepense(),
             $this->getMontant()
            );
            return $query;
    }
}