<?php
include_once("../classes/User.php");
$user = new User();

if (isset($_POST['updateUserSubmit'])) {

    $userId = $_POST['userId'];
    $fname = $_POST['fname'];
    $mname = empty($_POST['mname']) ? "N/A" : $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    $alert;
    $symbol;


    $user->updateUser($userId,$fname,$mname,$lname,$age,$dob,$job);
    $alert = $user->getQueryStatus() ? "user has been Updated!" : "Failed updating user!";;
    $symbol = $alert ? "success" : "error";
    $message = array('alert' => $alert, 'icon' => $symbol);

    echo json_encode($message);
}
