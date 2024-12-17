<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Document</title>
</head>

<body>
    <section class="container">
        <div>
            <h3>Request</h3>
            <p>First Name: <?php if (isset($_REQUEST["fname"]) && !empty($_REQUEST["fname"])) :
                                echo $_REQUEST['fname'];
                            else :
                                echo "fname coming soon...";
                            endif; ?> </p>
            <p>Last Name: <?php if (isset($_REQUEST["lname"]) && !empty($_REQUEST["lname"])) :
                                echo $_REQUEST['lname'];
                            else :
                                echo "lname coming soon...";
                            endif; ?> </p>

        </div>
    </section>

    <section class="container">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "server result fname: ", $_POST["fname"];
            echo "server result lname: ", $_POST["lname"];
        }
        ?>

    </section>
    <section class="container">
        <div>
            <h3>Get Method</h3>
            <p>First Name: <?php if (isset($_GET["fname"]) && !empty($_GET["fname"])) :
                                echo $_GET['fname'];
                            else :
                                echo "fname coming soon...";
                            endif; ?> </p>
            <p>Last Name: <?php if (isset($_GET["lname"]) && !empty($_GET["lname"])) :
                                echo $_GET['lname'];
                            else :
                                echo "lname coming soon...";
                            endif; ?> </p>

        </div>
        <div>
            <h2>Our First "GET" Method Form</h2>
            <div>
                <form method="GET">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="enter your first name">
                    <br>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" placeholder="enter your last name">
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>
    <section class="container">
        <div>
            <h3>Post Method</h3>
            <p>First Name: <?php if (isset($_POST["fname"]) && !empty($_POST["fname"])) :
                                 echo $_POST['fname'];
                            else :
                                echo "fname coming soon...";
                            endif; ?> </p>
            <p>Last Name: <?php if (isset($_POST["lname"]) && !empty($_POST["lname"])) :
                                echo $_POST['lname'];
                            else :
                                echo "lname coming soon...";
                            endif; ?> </p>

        </div>
        <div>
            <h2>Our First "POST" Method Form</h2>
            <div>
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="enter your first name">
                    <br>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" placeholder="enter your last name">
                    <br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </section>

</body>

</html>