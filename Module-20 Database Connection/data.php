<?php

include "config.php";

$dbConnection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbConnection) {
    throw new Exception("Can't connect to database");
} else {
    // "INSERT INTO ' .DB_TABLE .' (name, age) VALUES ("Rashidul", 25)";
    // $query = 'INSERT INTO ' . DB_TABLE . ' (name, age) VALUES ("Firoj", "26")';

    // $insertData = mysqli_query($dbConnection, $query);
    // if ($insertData) {
    //     echo "Data Add Successfully \n";
    // } else {
    //     echo "Some Think is wrong!!! \n";
    // }

    // SELECT FROM DB_TABLE;
    // $query = 'SELECT * FROM ' . DB_TABLE;
    // $selectData = mysqli_query($dbConnection, $query);

    // if ($selectData) {
    //     while ($data = mysqli_fetch_assoc($selectData)) {
    //         echo "<pre>";
    //         print_r($data);
    //         echo "</pre>";
    //     }
    // } else {
    //     echo "Data Not Found!! \n";
    // }

    // DELETE FROM DB_TABLE;
    $query = 'DELETE FROM ' . DB_TABLE;
    $dataDelete = mysqli_query($dbConnection, $query);
    if (!$dataDelete) {
        echo "Data Delete Some Think Wrong!! \n";
    } else {
        echo "Data Delete Successfully. \n";
    }

    // TRUNCATE TABLE . DB_TABLE;

    mysqli_close($dbConnection);
}
