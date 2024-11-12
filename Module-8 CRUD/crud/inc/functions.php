<?php
// data file path name
define("DB_Name", "data/db.txt");

function seed($filePathName)
{
    $studentsData = array(
        array(
            "id" => 1,
            "name" => "Rashidul",
            "roll" => 11,
            "age" => 25
        ),
        array(
            "id" => 2,
            "name" => "Rakib",
            "roll" => 2,
            "age" => 19
        ),
        array(
            "id" => 3,
            "name" => "Rouf",
            "roll" => 1,
            "age" => 30
        ),
        array(
            "id" => 4,
            "name" => "Rafiul",
            "roll" => 3,
            "age" => 13
        ),
        array(
            "id" => 5,
            "name" => "Arafat",
            "roll" => 3,
            "age" => 10
        ),
    );

    // $data = json_encode($studentsData);
    $data = serialize($studentsData);
    file_put_contents($filePathName, $data, LOCK_EX);
}

function allData($filePathName)
{
    if (is_readable($filePathName)) {
        $data = file_get_contents($filePathName);
        $studentsData = unserialize($data);
        return $studentsData;
    }
}

function addStudent($name, $roll, $age)
{
    $_found = false;
    $serializeData = file_get_contents(DB_Name);
    $students = unserialize($serializeData);

    foreach ($students as $_student) {
        if ($roll === $_student['roll']) {
            $_found = true;
            break;
        }
    }

    if (!$_found) {
        $newId = getNewId($students);
        $strArrayData = array(
            "id" => $newId,
            "name" => $name,
            "roll" => $roll,
            "age" => $age,
        );
        array_push($students, $strArrayData);
        $strSerializeData = serialize($students);
        file_put_contents(DB_Name, $strSerializeData, LOCK_EX);
        return true;
    }
    return false;
}

function getNewId($students)
{
    $maxId = max(array_column($students, "id"));
    return $maxId + 1;
}


function getStudent($id)
{
    $data = file_get_contents(DB_Name);
    $students = unserialize($data);
    foreach ($students as $student) {
        if ($student["id"] == $id) {
            return $student;
        }
    }
    return false;
}

function  updateStudent($id, $name, $roll, $age)
{
    $data = file_get_contents(DB_Name);
    $students = unserialize($data);
    
    // foreach ($students as $student) {
    //     if ($id == $student['id']) {
    //         $student['name'] = $name;
    //         $student['roll'] = $roll;
    //         $student['age'] = $age;
    //     }
    // }

    $students[$id - 1]['name'] = $name;
    $students[$id - 1]['roll'] = $roll;
    $students[$id - 1]['age'] = $age;
    // print_r($students);
    $strSerializeData = serialize($students);
    file_put_contents(DB_Name, $strSerializeData, LOCK_EX);
}

function studentDelete($id)
{
    $data = file_get_contents(DB_Name);
    $students = unserialize($data);
    unset($students[$id - 1]);

    $strSerializeData = serialize($students);
    file_put_contents(DB_Name, $strSerializeData, LOCK_EX);
}
