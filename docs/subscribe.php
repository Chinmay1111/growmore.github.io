<?php

$subscribe = $_POST['subscribe'];

$to = "chinmaybhoir44@gmail.com";

//ambures87@gmail.com

$subject = "Mail From GrowMore";

$txt ="Name = ". $subscribe;

$headers = "From: noreply@growmore.com" . "\r\n" . "CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
header("Location:thankyou.html");

?>


