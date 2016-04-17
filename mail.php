<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "annakatherinebaker@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail(annakatherinebaker@gmail.com, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
