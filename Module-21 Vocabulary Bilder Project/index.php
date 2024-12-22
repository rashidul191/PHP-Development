<?php
session_start();
$_user_id = $_SESSION['id'] ?? 0;

// echo $_user_id;

if ($_user_id) {

    header("Location: words.php");
}

include_once "function.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Vocabulary Builder</title>
</head>

<body>
    <section class="container">
        <h1>My Vocabularies</h1>
        <div>
            <a id="login" href="#">Login</a> |
            <a id="register" href="#">Register Account</a>
        </div>
        <hr>

        <div>
            <form action="tasks.php" method="POST" id="form01">
                <h3>Login</h3>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" require>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" require>


                <p>
                    <?php
                    $statusCode = $_GET["status"] ?? 0;
                    if ($statusCode) {
                        echo  getStatusMessage($statusCode);
                    }
                    ?>

                </p>

                <input type="hidden" id="action" name="action" value="login">
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="script.js"></script>
</body>

</html>