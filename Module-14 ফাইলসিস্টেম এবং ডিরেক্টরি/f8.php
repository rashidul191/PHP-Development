<?php

// Directory With Files Copy Using PHP

function copyDir($sourceFile, $destinationFile)
{
    if (!is_dir($sourceFile)) {
        echo "Source directory does not exits.";
        return;
    }

    if (!is_dir($destinationFile)) {
        mkdir($destinationFile, 0777, true);
    }


    $files = scandir($sourceFile);

    foreach ($files as $file) {
        if ("." !== $file && ".." !== $file) {

            $sourcePath = $sourceFile . "/" . $file;
            $destinationPath = $destinationFile . "/" . $file;
            if (is_dir($sourcePath)) {
                copyDir($sourcePath, $destinationPath);
            } else {
                copy($sourcePath, $destinationPath);
            }
        }
    }
}

$source = getcwd() . "/source/test";
$destination = getcwd() . "/target/test";

copyDir($source, $destination);
