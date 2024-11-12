<?php
session_name("login");
session_start(array(
    "cookie_lifetime" => 60, // 5minute
));

// echo md5("12345");

$error = false;
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ("admin" == $_POST['username'] && "827ccb0eea8a706c4c34a16891f84e7b" == md5($_POST['password'])) {
        $_SESSION['logined'] = true;
    } else {
        $_SESSION['logined'] = false;
        $error = true;
    }
}

if (isset($_POST['logout'])) {
    $_SESSION['logined'] = false;
    session_destroy();
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
        <h1>
            <?php if (true == $_SESSION['logined']) {
                echo "Hi, Welcome Admin";
            } else {
                echo "Hi, Login Below";
            }

            ?>
        </h1>
    </section>
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

        ?>
            <form action="auth.php" method="POST">
                <input type="hidden" name="logout" value="1">
                <input type="submit" value="Log Out" name="submit">
            </form>
        <?php
        }
        ?>
    </section>
    <!-- Login Form Section End  -->

</body>

</html>