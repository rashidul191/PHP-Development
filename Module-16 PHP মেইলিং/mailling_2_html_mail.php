<?php

$to = "tuktakdeal24@gmail.com";
$from = "rashidul.191cse.gub@gmail.com";
$subject = "How is life - HTML";
$headers = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= "From: {$from}\r\n";

$body = "<strong>Hello</strong><br/> কি খবর কেমন আছো? <br/>";
$body .= "<h2>Any Text</h2>";



echo mail ($to, $from, $subject, $body, $headers);
