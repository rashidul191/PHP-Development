<?php

register_shutdown_function("handleFatalError");

function handleFatalError(){
    $error = error_get_last(); // Get the last error
    if($error){
        echo "Fatal Error: {$error['message']} in {$error['file']} on line {$error['line']}\n";
    }
}

// nonExistentFunction();