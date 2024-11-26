<?php

$to = "tuktakdeal24@gmail.com";
$from = "Rashidul <rashidul.191cse.gub@gmail.com>";
$subject = "Test Email from Localhost";
$message = "Hello, this is a test email sent from localhost using PHP.";
$headers = "From: {$from}\r\n";

if (mail($to, $from, $subject, $message, $headers)) {
    echo "Mail sent successfully!";
} else {
    echo "Failed to send mail.";
}
