<?php

session_start();
$_user_id = $_SESSION['id'] ?? 0;
if (!$_user_id) {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Words</title>
</head>

<body>

    <section class="container">
        <div class="row">
            <div class="column" style="background-color: #e5e5e5;">
                <div>
                    <h4>Menu</h4>
                    <a href="#">All Words</a><br><br>
                    <a href="#">Add New Word</a><br><br>
                    <a href="logout.php">Logout</a><br>
                </div>
            </div>
            <div class="column column-75">
                <div class="row">
                    <div class="column">
                        <form action="#">
                            <select name="" id="">
                                <option value="#">All Words</option>
                                <option value="A">A</option>
                                <option value="D">B</option>
                                <option value="C">C</option>
                            </select>
                        </form>
                    </div>
                    <div class="column">
                        <form action="#">
                            <input type="search" name="" id="" placeholder="Search Here">
                        </form>
                    </div>
                </div>
                <hr>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Word</th>
                                <th>Definition</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Stephen Curry</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, quod?</td>

                            </tr>
                            <tr>
                                <td>Klay Thompson</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, quod?</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="script.js"></script>
</body>

</html>