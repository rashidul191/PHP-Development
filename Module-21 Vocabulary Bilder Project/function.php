<?php

function getStatusMessage($statusCode = 0)
{
    $status = array(
        "0" => "",
        "1" => "Duplicate Email !!!",
        "2" => "Email or Password Empty !!!",
        "3" => "User created successfully",
        "4" => "Email and Password didn't match !!!",
        "5" => "User doesn't exits !!!",
    );

    return $status[$statusCode];
}
