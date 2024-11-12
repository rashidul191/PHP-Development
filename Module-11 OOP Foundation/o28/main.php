<?php

namespace CloudStorage;

include "autoload.php";

use CloudStorage\Mail\Mailer;
use CloudStorage\Test\Test2\Test3;

// include "mail/mailer.php";
// include "test/test2/test3.php";


class Main
{
    function __construct()
    {
        $mailer = new Mailer();
        $mailer->sendMail();
        $test = new Test3();
        $test->test4();
    }
}

new Main();
