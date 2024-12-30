<?php

// $json = "{'country':'বাংলাদেশ'}";
$json = "{\"country\":\"বাংলাদেশ\"}";
print_r(json_decode($json, true));
echo json_last_error_msg();
