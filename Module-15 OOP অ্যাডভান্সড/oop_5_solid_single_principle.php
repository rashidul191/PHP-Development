<?php

// Solid -> Single Responsibility Principle

// The Single Responsibility Principle (SRP) is one of the SOLID principles in software development. It means that a class should have only one reason to change. In simpler terms, a class should have only one job or responsibility.


class Mailer
{
    function sendMail($to, $from, $subject, $message, $attachment) {}
    function connectMTA($mtaType, $username, $password) {}
    function prepareMail($to, $from, $subject, $message) {}
    function despatch() {}
}

class MailGateway
{
    function connection() {}
    function send($mailBody)
    {
        echo $mailBody;
    }
}

class MailInterface
{
    function addAttachment($attachment)
    {

        echo $attachment;
    }

    function prepare($to, $from, $subject, $message)
    {
        echo $to . "," . $from . "," . $subject . "," . $message;
    }
}
class AttachmentInterface {}

class BetterMailer
{
    public $mg;
    public $mail;
    public $attachment;
    function __construct(MailGateway $mg, MailInterface $mail, AttachmentInterface $attachment)
    {
        $this->mg = $mg;
        $this->mail = $mail;
        $this->attachment = $attachment;
    }

    function sendMail($to, $from, $subject, $message, $attachment)
    {
        $this->mail->addAttachment($attachment);
        $mailBody = $this->mail->prepare($to, $from, $subject, $message);
        $this->mg->connection();
        $this->mg->send($mailBody);
    }
}
