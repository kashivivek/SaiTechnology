<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_countryCode = $_POST['countryCode'];
$visitor_phone = $_POST['phone'];
$companyname = $_POST['companyname'];

$email_from = "info@saitechnology.com";//<== update the email address
$email_subject = "Brochure Download Request from $name";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team, \n \n The user $name has downloaded the Healthcare Brochure. Please find his details, ".
		"\n\n Name:$name \n Email: $visitor_email \n Phone: +$visitor_countryCode $visitor_phone \n Company Name: $companyname \n \n Thanks,\n SAI Technology.";

$to = "vivek@saitechnology.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect BorchureViewer.html');
header('Location: BorchureViewer.html');

?>