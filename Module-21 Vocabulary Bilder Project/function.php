<?php

include_once 'config.php';

$dbConnection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$action = $_POST['action'] ?? "";
$statusCode = 0;
if (!$dbConnection) {
    throw new Exception("DataBase Connection Some Think Wrong!!");
}

function getStatusMessage($statusCode = 0)
{
    $status = array(
        "0" => "",
        "1" => "Duplicate Email !!!",
        "2" => "Email or Password Empty !!!",
        "3" => "User created successfully",
        "4" => "Email and Password didn't match !!!",
        "5" => "User doesn't exits !!!",
    );

    return $status[$statusCode];
}

function  getWords($user_id, $search = null)
{
    global $dbConnection;
    if ($search) {
        // $query = "SELECT * FROM words WHERE user_id = '{$user_id}' AND word LIKE '%{$search}' ORDER BY word";
        // $query = "SELECT * FROM words WHERE user_id = '{$user_id}' AND word LIKE '%{$search}%' ORDER BY word";
        $query = "SELECT * FROM words WHERE user_id = '{$user_id}' AND word LIKE '{$search}%' ORDER BY word";
    } else {
        $query = "SELECT * FROM words WHERE user_id = '{$user_id}' ORDER BY word";
    }
    $result = mysqli_query($dbConnection, $query);
    $data = [];
    while ($_data = mysqli_fetch_assoc($result)) {
        array_push($data, $_data);
    }

    return $data;
}
