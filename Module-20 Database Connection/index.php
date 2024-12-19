<?php
include "config.php";

$dbConnection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>MySql</title>
</head>

<body>

    <section class="container">

        <?php
        $query = 'SELECT * FROM ' . DB_TABLE . ' WHERE complate = 1';
        // $query = 'SELECT * FROM ' . DB_TABLE . ' ORDER BY id DESC';
        $getCData = mysqli_query($dbConnection, $query);

        // print_r($getCData);

        if (mysqli_num_rows($getCData) > 0):
        ?>

            <h3>Complete Tasks</h3>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>

                    <?php

                    while ($dataC = mysqli_fetch_assoc($getCData)):
                    ?>

                        <tr>
                            <td><input type="checkbox" name="check" id="check" value="<?php echo $dataC['id'] ?>"></td>
                            <td><?php echo $dataC['id'] ?></td>
                            <td><?php echo $dataC['name'] ?></td>
                            <td><?php echo $dataC['age'] ?></td>
                            <td><a class="delete" data-taskid="<?php echo $dataC['id'] ?>" href="#">Delete</a> | <a class="incomplete" data-taskid="<?php echo $dataC['id'] ?>" href="#">Make Incomplete</a> </td>
                        </tr>

                    <?php
                    endwhile;
                    ?>

                </tbody>
            </table>

        <?php
        endif;
        ?>

        <?php
        $query = 'SELECT * FROM ' . DB_TABLE . ' WHERE complate = 0';
        // $query = 'SELECT * FROM ' . DB_TABLE . ' ORDER BY id DESC';
        $getData = mysqli_query($dbConnection, $query);
        if ($getData):
        ?>

            <h3>Upcoming Tasks</h3>
            <form action="tasks.php" method="POST">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        while ($data = mysqli_fetch_assoc($getData)):
                        ?>

                            <tr>
                                <td><input type="checkbox" name="taskids[]" id="check" value="<?php echo $data['id'] ?>"></td>
                                <td><?php echo $data['id'] ?></td>
                                <td><?php echo $data['name'] ?></td>
                                <td><?php echo $data['age'] ?></td>
                                <td><a class="delete" data-taskid="<?php echo $data['id'] ?>" href="#">Delete</a> | <a class="complete" data-taskid="<?php echo $data['id'] ?>" href="#">Complete</a></td>
                            </tr>

                        <?php
                        endwhile;
                        ?>

                    </tbody>
                </table>
                <div style="width: 200px;">
                    <select name="action" id="bulkaction">
                        <option value="0">With Selected</option>
                        <option value="bulkdelete">Delete</option>
                        <option value="bulkcomplete">Complete</option>
                    </select>
                    <input type="submit" id="bulksubmit" value="Submit">
            </form>
            </div>

        <?php
        else:

            echo "<p>Data Not Found!!</p>";
        endif;
        ?>


    </section>



    <section class="container">

        <?php
        if (isset($_GET['added'])) {
            echo "<p>Data Added Successfully.</p>";
        }
        ?>

        <div>
            <h3>Add Task</h3>
            <form action="tasks.php" method="POST">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" placeholder="enter your full name">
                <br>
                <label for="age">Age</label>
                <input type="text" name="age" id="age" placeholder="enter your age ">

                <input type="hidden" name="action" value="add">
                <br>
                <input type="submit" value="Submit">
            </form>

        </div>
    </section>

    <!-- completeTask hidden from start  -->
    <form action="tasks.php" method="post" id="completeTask">
        <input type="hidden" name="taskid" id="taskid">
        <input type="hidden" name="action" id="caction" value="complete">
    </form>
    <!-- completeTask hidden from end  -->

    <!-- deleteTask hidden from start  -->
    <form action="tasks.php" method="post" id="deleteTask">
        <input type="hidden" name="deleteid" id="deleteid">
        <input type="hidden" name="action" id="daction" value="delete">
    </form>
    <!-- deleteTask hidden from end  -->

    <!-- incompleteTask hidden from start  -->
    <form action="tasks.php" method="post" id="incompleteTask">
        <input type="hidden" name="incompleteid" id="incompleteid">
        <input type="hidden" name="action" id="inaction" value="incomplete">
    </form>
    <!-- incompleteTask hidden from end  -->

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script>
        ;
        (function($) {
            $(document).ready(function() {
                $(".complete").on("click", function() {
                    var id = $(this).data("taskid");

                    $("#taskid").val(id);
                    $("#completeTask").submit();
                });

                $(".delete").on("click", function() {
                    var deleted = confirm("Are You Delete Data ??");
                    if (deleted) {
                        var id = $(this).data("taskid");
                        $("#deleteid").val(id);
                        $("#deleteTask").submit();
                    }
                });
                $(".incomplete").on("click", function() {
                    var id = $(this).data("taskid");
                    $("#incompleteid").val(id);
                    $("#incompleteTask").submit();
                });
                $("#bulksubmit").on("click", function() {
                    if ($("#bulkaction").val() == "bulkdelete") {
                        if (!confirm("Are you delete data??")) {
                            return false;
                        }
                    }
                });
            })
        }(jQuery));
    </script>
</body>

</html>