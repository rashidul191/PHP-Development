<?php

// Solid -> Open Closed Principle


interface FileInterface
{
    function display();
}

interface FileTestInterface
{
    function testDisplay();
}


class FileDisplay
{
    function fileDisplay(FileInterface $file)
    {
        $file->display();
    }
}

class ImageFile implements FileInterface
{

    private $fileName;

    function __construct($fileName)
    {
        $this->fileName = $fileName;
    }
    function display()
    {
        // take necessary steps to display image
    }
}


class VideoFile implements FileInterface
{
    private $fileName;

    function __construct($fileName)
    {
        $this->fileName = $fileName;
    }
    function display()
    {
        // take necessary steps to display video player
    }
}

$image = new ImageFile("abcd.jpg");
$video = new VideoFile("video.mp4");

$result = new FileDisplay();

$result->fileDisplay($image);
$result->fileDisplay($video);
