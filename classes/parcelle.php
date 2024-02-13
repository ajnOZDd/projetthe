<?php
class parcel {
    private $nombretotalpiedparparcelle;
    private $numeroparcel;
    private $surfacehectare;
    private $idvariete;

    public function __construct($nombretotalpiedparparcelle , $numeroparcel , $surfacehectare , $idvariete ) {
        $this->setNombretotalpiedparparcelle($nombretotalpiedparparcelle) ;
        $this->setNumeroparcel($numeroparcel) ;
        $this->setSurfacehectare($surfacehectare) ;
        $this->setIdvariete($idvariete) ;
    }

    public function setNombretotalpiedparparcelle($nombretotalpiedparparcelle) {
        $this->nombretotalpiedparparcelle = $nombretotalpiedparparcelle;
    }

    public function getNombretotalpiedparparcelle() {
        return $this->nombretotalpiedparparcelle;
    }

    public function setNumeroparcel($numeroparcel) {
        $this->numeroparcel = $numeroparcel;
    }

    public function getNumeroparcel() {
        return $this->numeroparcel;
    }

    public function setSurfacehectare($surfacehectare) {
        $this->surfacehectare = $surfacehectare;
    }

    public function getSurfacehectare() {
        return $this->surfacehectare;
    }

    public function setIdvariete($idvariete) {
        $this->idvariete = $idvariete;
    }

    public function getIdvariete() {
        return $this->idvariete;
    }

    public function addparcel (){
        $query= sprintf("INSERT INTO parcelle (nombretotalpiedparparcelle ,numeroParcelle ,surfaceHectare , idVariete) values (%s , %s , %s, %s)", 
        $this->getNombretotalpiedparparcelle(),$this-> getNumeroparcel() ,$this->getSurfacehectare(), $this->getIdvariete() ) ;
        return $query ;
    }

}