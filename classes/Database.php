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
            // data source name
            $db = 'mysql:host='.$this->host.';dbname='.$this->dbname;
            // create a PDO instance
            $this->conn = new PDO($db,$this->user,$this->password);
            // PDO query
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        }catch(PDOException $e){
            echo "Connection Failed". $e->getMessage();
        }
        return $this->conn;
    }

}


?>