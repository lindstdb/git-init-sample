<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];


$email_from = 'lindstdb@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".

$to = "lindstdb@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>