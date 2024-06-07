<?php
    include_once("Query.php");

class User extends Query{

    // return the query data from database
    public function DisplayData(){
        return $this->fetchData();
    }
    // send the user credentials to query class
    public function insertUser($fname,$mname,$lname,$age,$dob,$email,$job){
        $this->insertData($fname,$mname,$lname,$age,$dob,$email,$job);
    }   

}



?>