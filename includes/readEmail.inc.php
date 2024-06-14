<?php
include_once('../classes/User.php');
$user = new User();


if (isset($_POST['evaluateEmail'])) {
    $email = $_POST['email'];


    $result;

    $user->evaluateEmail($email);

    $result = $user->getQueryStatus() ? "exists" : "!exists";
    $message = array('result' => $result);

    echo json_encode($message);
}
