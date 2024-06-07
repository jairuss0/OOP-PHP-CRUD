<?php

include('Database.php');

class Query extends Db{

    // this is where all the query for the user class
    // create,update,delete

    //fetch data from database
    protected function fetchData(){
        try{
            $sql = "SELECT * FROM user ORDER BY id DESC";
            $stmt = $this->connected()->prepare($sql);
            $stmt->execute();
            // return the statement result as array
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
        
    }  
    // insert data from the database
    protected function insertData($fname,$mname,$lname,$age,$dob,$email,$job){
        try{
            $sql = "INSERT INTO user (firstName,middleName,lastName,age,dob,email,job) VALUES(
            :firstName,:middleName,:lastName,:age,:dob,:email,:job)";
            $stmt = $this->connected()->prepare($sql);
            $succes = $stmt->execute(['firstName' => $fname, 
            'middleName' => $mname, 'lastName' => $lname, 'age' => $age, 
            'dob' => $dob, 'email' => $email, 
            'job' => $job, ]);

            if($succes){
                header('Location:../pages/dashboard.php');
            }
            else{
                header('Location:../pages/dashboard.php');
            }
            
        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    } 
    
}



?>