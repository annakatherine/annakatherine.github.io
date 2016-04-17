<?php $name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "annakatherinebaker@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail(annakatherinebaker@gmail.com, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
