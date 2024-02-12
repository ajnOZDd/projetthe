<?php
class Connexion {
    private $host;
    private $name;
    private $password;
    private $dbname;

    public function __construct($host, $dbname, $name, $password) {
        $this->setName($name);
        $this->setHost($host);
        $this->setPassword($password);
        $this->setDbname($dbname);
        $this->setConnexion();
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

    public function setConnexion() {
        try {
            $dsn = sprintf("mysql:host=%s;dbname=%s", $this->getHost(), $this->getDbname());
            $query = new PDO($dsn, $this->getName(), $this->getPassword());
            return $query;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}