<?php
include_once("../classes/User.php");
$user = new User();

if(isset($_POST['deleteUserSubmit'])){
    $userId = $_POST['userId'];
    $alert;
    $symbol;
    if(empty($userId)){
         $alert = "Failed Deleting User!";
         $symbol = "error";
         $message=array('alert'=>$alert,'icon'=>$symbol);   
    }
    else{
        $user->deleteUser($userId);
        $alert = $user->getQueryStatus() ? "User has been deleted!" : "failed deleting user";
        $symbol = $alert ?  "success" : "error";
        $message=array('alert'=>$alert,'icon'=>$symbol);   
    }
    echo json_encode($message);
}

?>