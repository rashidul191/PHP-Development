<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require_once "src/PHPMailer.php";
require_once "src/Exception.php";
require_once "src/SMTP.php";

$pm = new PHPMailer(true);

try {
    // add SMTP PHPMailer
    $pm->SMTPDebug = 2;
    $pm->isSMTP(true);
    $pm->SMTPAuth = true;
    $pm->Host = "text.rashidul.me";
    $pm->Username = "test@rashidul.me";
    $pm->Password = "--password";
    $pm->SMTPSecure = "tls";
    $pm->Port = 587;

    // PHPMailer send basic information
    $pm->isHTML(true);
    $pm->setFrom("test@example.com"); // from
    $pm->addAddress("rashidul.191cse.gub@gmail.com"); // to
    $pm->Subject = "Here is the invoice";
    $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last purchase";
    $pm->AltBody = "Here is the invoice from your last purchase";
    $pm->addAttachment("./rashidul.pdf");
    $pm->send();

    echo "Mail Send";
} catch (Exception $e) {
    echo "Failed {$pm->ErrorInfo}";
}
