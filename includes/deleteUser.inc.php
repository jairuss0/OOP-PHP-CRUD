<?php

$user = new User();

if(isset($_POST['deleteSubmit'])){
    $userId = $_POST['userId'];

    $user->deleteUser($userId);

    // check the status of the query
    if($user->getQueryStatus()){
        $alert = '<script>
                swal({
                    title: "Success!",
                    text: "user deleted!",
                    icon: "success",
                });
            </script>';          
    }
    else{
        $alert = '<script>
                swal({
                    title: "Error!",
                    text: "deleting failed!",
                    icon: "success",
                });
            </script>';           
    }
   
}

?>