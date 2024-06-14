<?php

include('Database.php');

class Query extends Db{

    // this is where all the query for the user class
    // create,update,delete

    //fetch data from database
    protected $success;

    protected function fetchData(){
        try{
            $sql = "SELECT * FROM user ORDER BY id ASC";
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
            $this->success = $stmt->execute(['firstName' => $fname, 
            'middleName' => $mname, 'lastName' => $lname, 'age' => $age, 
            'dob' => $dob, 'email' => $email, 
            'job' => $job]);

            if($this->success){
                $this->queryStatus();
                
            }else{
                $this->queryStatus();
            }

        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    } 

    protected function updateData($userId,$fname,$mname,$lname,$age,$dob,$job){
        try{
            $sql = "UPDATE user SET firstName = :fname, middleName = :mname, lastName = :lname
            ,age = :age, dob = :dob, job = :job where id = :id";   
            $stmt = $this->connected()->prepare($sql);
            $this->success = $stmt->execute(['fname' => $fname, 
            'mname' => $mname, 'lname' => $lname, 'age' => $age,
            'dob' => $dob,
            'job' => $job, 'id' => $userId]);


            if($this->success){
                $this->queryStatus();
                
            }else{
                $this->queryStatus();
            }

        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    }
    
    protected function deleteData($userId){
        try{
            $sql = "DELETE FROM user WHERE id = :id";
            $stmt = $this->connected()->prepare($sql);
            $this->success = $stmt->execute(['id' => $userId]);
            if($this->success){
                $this->queryStatus();
                
            }else{
                $this->queryStatus();
            }
        }catch(PDOException $e){
            echo "Error: ". $e->getMessage();
        }
    }

    public function queryStatus(){
        return $this->success;
    }
    
    protected function emailDuplicate($email){
        try{
            $sql = "SELECT * FROM user WHERE email = :email";
            $stmt = $this->connected()->prepare($sql);
            $stmt->execute(['email' => $email]);
            $this->success = $stmt->fetch();
           
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }
}



?>