<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'home@yourwebsite.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitoe_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'gagantayal54@gmail.com';

$headers = "From: $email_from \r\n";

$header .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>