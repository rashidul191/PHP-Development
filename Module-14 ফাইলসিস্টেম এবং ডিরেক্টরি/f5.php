<?php
// Directory Iterator
$directories = new DirectoryIterator("./");
foreach ($directories as $file) {
    if ($file->isDot()) {
        continue;
    }
    if ($file->isDir()) {
        // echo $file->getPathName() . "\n";
        echo $file->getPathname() . "\n";
    } else {
        echo $file->getPathname() . ":" . $file->getSize() . "\n";
    }
}
