<?php
    include_once("Query.php");

class User extends Query{

    // send the user input into the query method
    public function DisplayData(){
        return $this->fetchData();
    }

    public function insertUser($fname,$mname,$lname,$age,$dob,$email,$job){
        $this->insertData($fname,$mname,$lname,$age,$dob,$email,$job);
    }   

}



?>