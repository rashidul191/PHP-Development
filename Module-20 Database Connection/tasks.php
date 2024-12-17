<?php
include "config.php";

$dbConnection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbConnection) {
    throw new Exception("Can't connect to database");
} else {
    $action = $_POST["action"] ?? '';

    if (!$action) {
        header("Location: index.php");
        die();
    } else {

        if ("add" == $action) {

            $name = $_POST['name'];
            $age = $_POST['age'];
            if ($name && $age) {

                $query = $query = 'INSERT INTO ' . DB_TABLE . ' (name, age) VALUES ("' . $name . '", "' . $age . '")';
                // echo $query;
                $dataInsert = mysqli_query($dbConnection, $query);
                if ($dataInsert) {
                    header("Location: index.php?added=true");
                    mysqli_close($dbConnection);
                }
            }
        }
    }
}
