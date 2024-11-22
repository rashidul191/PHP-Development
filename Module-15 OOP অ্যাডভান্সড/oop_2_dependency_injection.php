<?php
// Dependency Injection

interface BaseStudent
{
    function displayName();
}

class Student implements BaseStudent
{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function displayName()
    {
        echo "Hello From " . $this->name;
    }
}
class ImprovedStudent implements BaseStudent
{
    private $name;
    private $title;
    function __construct($name, $title)
    {
        $this->name = $name;
        $this->title = $title;
    }
    function displayName()
    {
        echo "Hello From {$this->title} . {$this->name}";
    }
}

// class StudentManager
// {
//     function introduceStudents($name)
//     {
//         $st = new Student($name);
//         $st->displayName();
//     }
// }

// $sm = new StudentManager();
// $sm->introduceStudents("Rakib");

class StudentManager
{
    function introduceStudents(BaseStudent $studentObject)
    {
        $studentObject->displayName();
    }
}

$st = new Student("Rakib");
$ims = new ImprovedStudent("Rakib", "Mr");
$sm = new StudentManager();
// $sm->introduceStudents($st);
$sm->introduceStudents($ims);
