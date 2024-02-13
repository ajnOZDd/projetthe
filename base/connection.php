<?php
class Connexion {
    private $host;
    private $name;
    private $query ;
    private $password;
    private $dbname;

    public function __construct() {
       
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function getHost() {
        return $this->host;
    }

    public function setDbname($dbname) {
        $this->dbname = $dbname;
    }

    public function getDbname() {
        return $this->dbname;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setConnexion($host, $dbname, $name, $password) {
        $this->setName($name);
        $this->setHost($host);
        $this->setPassword($password);
        $this->setDbname($dbname);
        try {
            $dsn = sprintf("mysql:host=%s;dbname=%s", $this->getHost(), $this->getDbname());
            $this->query = new PDO($dsn, $this->getName(), $this->getPassword());
            return $this->query;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function default(){
        $this->setHost("172.20.0.167") ;
        $this->setDbname("db_p16_ETU002636") ;
        $this->setName("ETU002636") ;
        $this->setPassword("82QLFCPJGlxS") ;
        try {
            $dsn = sprintf("mysql:host=%s;dbname=%s", $this->getHost(), $this->getDbname());
            $this->query = new PDO($dsn, $this->getName(), $this->getPassword());
            return $this->query;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } 
  
}