<?php

$user = new User();

if(isset($_POST['updateSubmit'])){

    $userId = $_POST['userId'];
    $fname = $_POST['fname'];
    $mname = empty($_POST['mname']) ? "N/A" : $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $job = $_POST['job'];

    // update user Credentials
    $user->updateUser($userId,$fname,$mname,$lname,$age,$dob,$job);

    // check the status of the query
    if($user->getQueryStatus()){
        $alert = '<script>
                swal({
                    title: "Succes!",
                    text: "user updated!",
                    icon: "success",
                });
            </script>';
       
    }
    else{
        $alert = '<script>
                swal({
                    title: "Error!",
                    text: "updating failed!",
                    icon: "success",
                });
            </script>';        
    }
    
}

?>