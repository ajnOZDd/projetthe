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
}