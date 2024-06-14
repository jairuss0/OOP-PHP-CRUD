<?php
include_once("../classes/User.php");
$user = new User();

if (isset($_POST['createUserSubmit'])) {
    
    $fname = $_POST['fname'];
    $mname = empty($_POST['mname']) ? "N/A" : $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $job = $_POST['job'];

    $alert;
    $symbol;
   
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
         $alert = "Invalid Email Format";
         $symbol = "error";
        $message=array('alert'=>$alert,'icon'=>$symbol);   
    }
    else{
        $user->insertUser($fname, $mname, $lname, $age, $dob, $email, $job);
         $alert = $user->getQueryStatus() ? "user has been Created!" : "Failed Creating user!";;
         $symbol = $alert ? "success" : "error";
        
        $message=array('alert'=>$alert,'icon'=>$symbol);   
    }   
    echo json_encode($message);
}   
?>