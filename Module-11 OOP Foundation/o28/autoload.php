<?php

spl_autoload_register(function ($className) {
    $pathName = str_replace("CloudStorage\\", "", $className) . ".php";
    $mainFilePath = strtolower(str_replace("\\", "/", $pathName));
    include $mainFilePath;
});
