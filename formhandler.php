<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$number = $_POST['phone'];
$message = $_POST['message'];


$email_from="vidyalayclasses@vidyalayclasses.com ";
$email_subject = "New From Submission ";
$email_body = "User Name: $name.\n".
              "User Email: $visitors_email.\n".
              "Phone No: $number.\n".
              "User Message: $message.\n";

$to = 'vidyalayclasses@gmail.com';
$headers ="From : $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body ,$headers);
header("Location: index.html");
?>