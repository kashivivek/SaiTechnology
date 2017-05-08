<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "$visitor_email";//<== update the email address
$email_subject = "Reg: $visitor_subject";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team, \n \nI'm $name. Please find below, ".
		"\n$message \n \n Thanks,\n $name\n$visitor_email.";

$to = "info@saitechnology.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: index.html');

?>