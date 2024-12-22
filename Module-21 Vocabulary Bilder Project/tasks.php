<?php
session_start();
include_once 'config.php';

$dbConnection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$action = $_POST['action'] ?? "";
$statusCode = 0;
if (!$dbConnection) {
    throw new Exception("DataBase Connection Some Think Wrong!!");
} else {
    if ("register" == $action) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if ($email && $password) {
            $hashPassword = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO users (email, password) VALUES ('$email', '$hashPassword')";
            mysqli_query($dbConnection, $query);
            if (mysqli_error($dbConnection)) {
                $statusCode = 1;
            } else {
                $statusCode = 3;
            }
        } else {
            $statusCode = 2;
        }
        header("Location: index.php?status={$statusCode}");
    } else if ("login" == $action) {
        $userEmail = $_POST["email"];
        $userPassword = $_POST["password"];
        if ($userEmail && $userPassword) {

            $gQuery = "SELECT id, password FROM users WHERE email = '{$userEmail}'";
            $getDataFromDB = mysqli_query($dbConnection, $gQuery);

            if (mysqli_num_rows($getDataFromDB) > 0) {
                $data = mysqli_fetch_assoc($getDataFromDB);
                $_id = $data['id'];
                $_password = $data['password'];
                $passwordMatch =  password_verify($userPassword, $_password);
                if ($passwordMatch) {
                    $_SESSION["id"] = $_id;
                    header("Location: words.php");
                } else {
                    $statusCode = 4;
                }
            } else {
                $statusCode = 5;
            }
        } else {
            $statusCode = 2;
        }
        // header("Location: index.php?status={$statusCode}");
    }
}
