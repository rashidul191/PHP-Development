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
        } else if ("complete" == $action) {

            $taskId = $_POST['taskid'];
            if ($taskId) {
                $query = "UPDATE " . DB_TABLE . " SET complate = 1 WHERE id = " . $taskId . " LIMIT 1";
                $updateData = mysqli_query($dbConnection, $query);
            }
            header("Location: index.php");
        } else if ("delete" == $action) {
            $deleteid = $_POST['deleteid'];
            // echo $deleteid;

            if ($deleteid) {
                $query = "DELETE FROM " . DB_TABLE . " WHERE id = {$deleteid}";
                $updateData = mysqli_query($dbConnection, $query);
                header("Location: index.php");
            }
        } else if ("incomplete" == $action) {
            $incompleteId = $_POST["incompleteid"];
            // echo $incompleteId;
            if ($incompleteId) {
                $query = "UPDATE " . DB_TABLE . " SET complate = 0 WHERE id = " . $incompleteId . " LIMIT 1";
                $updateData = mysqli_query($dbConnection, $query);
            }
            header("Location: index.php");
        }
    }
}
