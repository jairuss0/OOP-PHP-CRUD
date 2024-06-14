<?php
include_once("../classes/User.php");
// get the data from the database
$user = new User();

$data_array = array();
$row = $user->DisplayData();
foreach ($row as $data) {
    array_push($data_array,$data);
}

echo json_encode($data_array);
/*
    
   */
