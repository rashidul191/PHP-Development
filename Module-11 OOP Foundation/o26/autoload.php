<?php
// Auto loading

// include "classes/cars.php";
// require "classes/toys.php";


spl_autoload_register(function($fileName){

    $filePath = __DIR__. "/classes/". $fileName .".php";    
    if(file_exists($filePath)){
        require $filePath;
    }else{
        echo "File $filePath not found."; 
    }

});

new Cars();
echo PHP_EOL;
new Toys();