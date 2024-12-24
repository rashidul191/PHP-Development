<?php

session_start();

require_once "function.php";

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
                    <a href="#" class="menu-item" data-target="wordsc">All Words</a><br><br>
                    <a href="#" class="menu-item" data-target="wordform">Add New Word</a><br><br>
                    <a href="logout.php">Logout</a><br>
                </div>
            </div>
            <div class="column column-75">

                <div class="wordsc helement" id="wordsc">
                    <div class="row">
                        <div class="column">
                            <div class="alphabets">
                                <select name="" id="alphabets">
                                    <option value="all">All Words</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>
                        <div class="column">
                            <form action="#">
                                <input type="search" name="" id="" placeholder="Search Here">
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <table class="words">
                            <thead>
                                <tr>
                                    <th>Word</th>
                                    <th>Definition</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $getWords = getWords($_user_id);
                                if ($getWords):
                                    foreach ($getWords as $getWord):
                                ?>
                                        <tr>
                                            <td><?php echo $getWord['word'] ?></td>
                                            <td><?php echo $getWord['meaning'] ?></td>

                                        </tr>
                                <?php

                                    endforeach;
                                endif;
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="formc helement" id="wordform" style="display: none;">
                    <form action="tasks.php" method="POST" id="">
                        <h4>Add New Word</h4>
                        <fieldset>
                            <label for="word">Word</label>
                            <input type="text" name="word" id="word" placeholder="word">
                            <label for="meaning">Meaning</label>
                            <textarea name="meaning" id="meaning" placeholder="Meaning" rows="5"></textarea>
                            <input type="hidden" name="action" value="addword">
                            <input type="submit" value="Add Word">
                        </fieldset>
                    </form>
                </div>

            </div>
        </div>
    </section>




    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="script.js"></script>
</body>

</html>