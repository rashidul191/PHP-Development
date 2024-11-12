<?php
echo getcwd();

// $entries = scandir(getcwd());
// foreach ($entries as $entry) {
//     if ("." !== $entry && ".." !== $entry) {
//         if (is_dir($entry)) {
//             echo "[D] {$entry} \n";
//         } else {
//             echo "[F] {$entry} \n";
//         }
//     }
// }



// Get Directory and Get Files Use Class
class Dir
{
    private $directory = [];
    private $files = [];

    function __construct($path)
    {
        $entries = scandir($path);

        foreach ($entries as $entry) {
            if ("." !== $entry && ".." !== $entry) {
                // if (is_dir($path. "/" .$entry)) {
                if (is_dir($path . DIRECTORY_SEPARATOR . $entry)) {
                    array_push($this->directory, $entry);
                } else {
                    array_push($this->files, $entry);
                }
            }
        }
    }

    function getDirectory($index)
    {
        if (isset($this->directory[$index])) {
            return new Dir($this->directory[$index]);
        } else {
            throw new Exception("index not found!");
        }
        return false;
    }

    function getDir()
    {
        return $this->directory;
    }
    function getFiles()
    {
        return $this->files;
    }
}


$directory = new Dir(getcwd());

print_r($directory->getDir()); // Get directory
print_r($directory->getFiles()); // Get Files


$test = $directory->getDirectory(0);

print_r($test->getDir());
print_r($test->getFiles());
