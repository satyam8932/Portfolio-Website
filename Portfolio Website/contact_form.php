<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$to = "satyamsingh5august@mail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $subject \r\n Subject =" . $subject;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>