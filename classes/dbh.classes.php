<?php 
class Dbh{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "oop_login";

    protected function connect(){
        try {
            $dsn = 'mysql:host=' .$this->host.';dbname='. $this->dbName ;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    
}

?>