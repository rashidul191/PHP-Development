<?php

$to = "rashidul.191cse.gub@gmail.com";
$from = "John Doe <test@example.com>";
$subject = "Here's the poem you are looking for";
$mainMessage = "Hi, here's the piem";
$fileName = "./rashidul.pdf";
$fileNewName = "poem.pdf";

$fileData = file_get_contents($fileName);

$boundary = "HereIsABoundary";

$headers = "From: {$from}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type:multipart/mixed;\r\n";
$headers .= " boundary=\"{$boundary}\"\r\n";

$message = "This is a multipart message \r\n";
$message .= "--{$boundary}\r\n";
$message .= "Content-type:text/plain; charset='UTF-8'";
$message .= "Content-Transfer-Encoding:7bit\r\n";
$message .= "{$mainMessage} \r\n";

$encodedFileData = chunk_split(base64_encode($fileData));

$message .= "--{$boundary}\r\n";
$message .= "Content-Type:application/pdf;\r\n";
$message .= " name={$fileNewName}\r\n";
$message .= "Content-Disposition: attachment;\r\n";
$message .= " filename={$fileNewName}\r\n";
$message .= "Content-Transfer-Encoding: base64\r\n";
$message .= "{$encodedFileData}\r\n";
$message .= "--{$boundary}--\r\n";

echo $mailSend = mail($to, $subject, $message, $headers);

if ($mailSend) {
    echo "Mail Send Successfully";
} else {
    echo "Fail Send Mail!";
}
