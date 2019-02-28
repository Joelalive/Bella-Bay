<?php
session_start();
    //echo '<pre>'.print_r($_POST, true).'</pre>'; die;
    $email_to = "desmonlatandos@gmail.com"; // change with your email
	$datebook     = $_POST['datebook'];
	$timebook     = $_POST['timebook'];
	$person    = $_POST['person'];
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $subject   = $_POST['subject'];
	$mainmessage    = $_POST['message'];
    //$message    = $_POST['message'];
    $message    = "
    	Date Book : $datebook
    	Time Book : $timebook
    	Person : $person
    	Name : $name
    	Email : $email
    	Pesan : $mainmessage
    ";

    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($email_to, $subject, $message, $headers)){
        echo "success";
    }
    else{
        echo "failed";
    }
?>
