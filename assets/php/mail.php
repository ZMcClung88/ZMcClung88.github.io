<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$to = "zac.mcclung370@gmail.com";
$recipient = "zac.mcclung370@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $to, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
