<?php
//get data from form  
$name = $_POST['fname'];
$email= $_POST['email'];
$number= $_POST['pnumber'];
$subject1= $_POST['subject'];
$message= $_POST['message'];
$to = "harrisonnanakana@gmail.com";
$subject = $subject1;
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n Mobile Number = ".$number."\r\n Subject = ".$subject. "\r\n Message = " . $message;
$headers = "From: $email" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
?>