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

            <?php

            if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) :
            ?>
                <h1>First Name : <?php echo htmlspecialchars($_REQUEST['fname']) ?></h1>
            <?php
            endif;
            ?>

            <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) : ?>
                <h1>Last Name: <?php echo htmlspecialchars($_REQUEST['lname']) ?></h1>
            <?php endif; ?>
        </div>
        <div>
            <h2>Our First Get Method Form</h2>
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