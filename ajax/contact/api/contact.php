<?php include('../../config/functions.php'); ?>
<?php require 'class.phpmailer.php'; ?> 
<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");





function contact_submit()
{

    global $db;
    if (isset($_GET['contact']) && $_GET['contact'] == 'true') {

        $name     = test_input($_POST['name']);
        $surname     = test_input($_POST['surname']);
        $email     = test_input($_POST['email']);
        $subject     = test_input($_POST['subject']);
        $message    = test_input($_POST['message']);
        $cell    = test_input($_POST['cell']);
        $date   = date("Y-m-d h:i:sa");

        require('email.php');

        
    }
}


contact_submit();

?>