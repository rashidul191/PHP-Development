<?php
// Recursive Directory Iterator

$rdi = new RecursiveDirectoryIterator("./", RecursiveDirectoryIterator::SKIP_DOTS);

$files = new RecursiveIteratorIterator($rdi);

foreach ($files as $file) {
    echo $file->getPath() . DIRECTORY_SEPARATOR . $file->getFileName() . "\n";
}
