<?php

class Db{

    // specify database credentials
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "users_db";
    protected $conn;

    // get the database connection
    protected function connected(){
        try{
            $db = 'mysql:host='.$this->host.';dbname='.$this->dbname;
            $this->conn = new PDO($db,$this->user,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e){
            echo "Connection Failed". $e->getMessage();
        }
        return $this->conn;
    }

}


?>