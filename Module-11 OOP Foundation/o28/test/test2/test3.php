<?php

namespace CloudStorage\Test\Test2;

use CloudStorage\Mail\Mailer;

class Test3{

    function test4(){
        echo "Test 4";

        $mailer = new Mailer();

        $mailer -> sendMail();
    }
}