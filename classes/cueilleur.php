<?php
class cueilleur {
    private $nomcueilleur;
    private $genreceuilleur;
    private $datenaissance;

    public function __construct() {
    }


    public function getNomcueilleur() {
        return $this->nomcueilleur;
    }

    public function setNomcueilleur($nomcueilleur) {
        $this->nomcueilleur = $nomcueilleur;
    }

    // Getter for $genreceuilleur
    public function getGenreceuilleur() {
        return $this->genreceuilleur;
    }

    // Setter for $genreceuilleur
    public function setGenreceuilleur($genreceuilleur) {
        $this->genreceuilleur = $genreceuilleur;
    }

    // Getter for $datenaissance
    public function getDatenaissance() {
        return $this->datenaissance;
    }

    // Setter for $datenaissance
    public function setDatenaissance($datenaissance) {
        $this->datenaissance = $datenaissance;
    }

    public function addcueilleure ( $nomcueilleur, $genreceuilleur, $datenaissance){
            $this->setNomcueilleur($nomcueilleur) ;
            $this->setGenreceuilleur($genreceuilleur);
            $this->setDatenaissance($datenaissance);
            $query = sprintf(
            "INSERT INTO cueilleur(nomCueilleur, genre, dateNaissance) values ('%s' , '%s' , '%s')",
             $this->getNomcueilleur(),
             $this->getGenreceuilleur(),
             $this->getDatenaissance()
            );
            return $query;
    }

}