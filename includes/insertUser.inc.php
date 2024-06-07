<?php
    include_once("../classes/User.php");
    $user = new User();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $fname = $_POST['fname'];
        $mname = empty($_POST['mname']) ? "N/A" : $_POST['mname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $age = $_POST['age'];
        $job = $_POST['job'];

        $user->insertUser($fname,$mname,$lname,$age,$dob,$email,$job);
        
        if($user){
            echo "user created!";
        }
    }


?>