<?php

$user = new User();

if (isset($_POST['insertSubmit'])) {

    $fname = $_POST['fname'];
    $mname = empty($_POST['mname']) ? "N/A" : $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $job = $_POST['job'];

    $user->insertUser($fname, $mname, $lname, $age, $dob, $email, $job);

    $alert;

    // check the status of the query
    if($user->getQueryStatus()){
        $alert = '<script>
                swal({
                    title: "Succes!",
                    text: "user created!",
                    icon: "success",
                });
            </script>';
    }
    else{
        $alert = '<script>
                swal({
                    title: "Error!",
                    text: "creating failed!",
                    icon: "success",
                });
            </script>';  
    }
    
}
?>