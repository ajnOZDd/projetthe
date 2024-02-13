<?php

class variete
{
    private $nomvariete;
    private $occupationparpied;
    private $rendementparpied;

    public function __construct()
    {
    }

    public function setNomvariete($nomvariete)
    {
        $this->nomvariete = $nomvariete;
    }

    public function getNomvariete()
    {
        return $this->nomvariete;
    }

    public function setOccupationparpied($occupationparpied)
    {
        $this->occupationparpied = $occupationparpied;
    }

    public function getOccupationparpied()
    {
        return $this->occupationparpied;
    }

    public function setRendementparpied($rendementparpied)
    {
        $this->rendementparpied = $rendementparpied;
    }

    public function getRendementparpied()
    {
        return $this->rendementparpied;
    }

    public function addvariete($nomvariete, $occupationparpied, $rendementparpied)
    {       $this->setNomvariete($nomvariete) ;
            $this->setOccupationparpied($occupationparpied) ;
            $this->setRendementparpied($rendementparpied) ;
            $query = sprintf(
            "INSERT INTO varieteThe(nomVariete,occupationParPied,rendementParPied ) values ('%s' , %s , %s)",
             $this->getNomvariete(),
            (double) $this->getOccupationparpied(),
            (double) $this->getRendementparpied()
            );
        return $query;
    }
}
