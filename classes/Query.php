<?php

include('Database.php');

class Query extends Db{

    // this is where all the query for the user class
    // create,update,delete

    //fetch data from database
    protected function fetchData(){
        try{
            $sql = "SELECT * FROM user";
            $stmt = $this->connected()->prepare($sql);
            $stmt->execute();
            // return the statement result as array
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        
    }  
    // insert data from the database
    protected function insertData($fname,$mname,$lname,$age,$dob,$email,$job){
        try{
            $sql = "INSERT INTO user (firstName,middleName,lastName,age,dob,email,job) VALUES('$fname','$mname','$lname','$age','$dob','$email','$job')";
            $success = $this->connected()->exec($sql); // use exec() because no result are returned

            if($success){

            }else{

            }
            
        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    } 
    
}



?>