<?php

$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$phone= $_POST['phone'];
$message= $_POST['message'];

$to = "chinmaybhoir44@gmail.com";

//ambures87@gmail.com

$subject = "Mail From GrowMore";

$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n  Subject = " . $subject . "\r\n  Phone = " . $phone . "\r\n Message = " . $message;

$headers = "From: noreply@growmore.com" . "\r\n" . "CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:thankyou.html");

?>

