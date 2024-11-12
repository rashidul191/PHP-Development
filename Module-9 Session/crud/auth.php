<?php
session_name("login");
session_start(array(
    "cookie_lifetime" => 300, // 5minute
));



// echo md5("12345"); // admin
// echo md5("123456"); // rashidul
$fp = fopen('data/users.txt', "r");


$error = false;

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

if ($username && $password) {


    $_SESSION['logined'] = false;
    $_SESSION['user'] = false;
    // print_r($data);
    while ($data = fgetcsv($fp)) {
        // if (isset($_POST['username']) && isset($_POST['password'])) {
        // if ($data[0] == $username && $data[1] == $password && 'roll' == $data[3]) {
        if ($data[0] == $username && $data[1] == md5($password)) {
            $_SESSION['logined'] = true;
            $_SESSION['user'] = $username;
            header("location: index.php");
        }
        // }
        if (!$_SESSION['logined']) {
            $error = true;
        }
    }
}

if (isset($_GET['logout'])) {
    $_SESSION['logined'] = false;
    $_SESSION['user'] = false;
    session_destroy();

    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Auth</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>

<body>

    <!-- Login Form Section Start  -->
    <section class="container">
        <?php
        if ($error == true) {
            echo "<p style='color: red'>username & password didn't match !! please try again.</p>";
        }
        ?>
        <?php if (false == $_SESSION['logined']) { ?>
            <form method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="enter user name">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="enter password">
                <br>
                <input type="submit" value="Log In" name="submit">
            </form>
        <?php
        } else {
            echo "user login {$_SESSION['user']}";
        }
        ?>
    </section>
    <!-- Login Form Section End  -->

</body>

</html>