<?php

mkdir("dir/d1/d2/d3", 0777, true);

file_put_contents("dir/f.txt", "hello");
file_put_contents("dir/d1/f.txt", "hello");
file_put_contents("dir/d1/d2/f.txt", "hello");
file_put_contents("dir/d1/d2/d3/f.txt", "hello");

sleep(10);

function deleteDir($path)
{
    if (!is_readable($path)) {
        return;
    }
    $fileInPath = scandir($path);

    if (count(($fileInPath)) > 2) {
        foreach ($fileInPath as $file) {
            if ("." !== $file && ".." !== $file) {
                $filePath = $path . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    deleteDir($filePath);
                } else {
                    unlink($filePath);
                    echo "Directory and File Deleted Successfully! \n";
                }
            }
        }
    }
    rmdir($path);
}


deleteDir(getcwd() . "/" . "dir");
