<?php
require_once "inc/functions.php";

$info = "";
$studentArr = [];
$task = $_GET["task"] ?? "report";
$error = $_GET["error"] ?? "0";
if ("seed" === $task) {
    seed(DB_Name);
    $info = "file create success";
} else {
    $studentArr[] = allData(DB_Name);
}


if ("delete" === $task) {
    $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);
    if ($id > 0) {
        studentDelete($id);
        header("location: index.php?task=report");
    }
}

$name = "";
$roll = "";
$age = "";
if (isset($_POST["submit"])) {

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, "roll", FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_STRING);


    if ($id) {
        // update student
        if ($name != "" && $roll != "" && $age != "") {
            updateStudent($id, $name, $roll, $age);
            header("location: index.php?task=report");
        }
    } else {
        // add a new student
        if ($name != "" && $roll != "" && $age != "") {
            $result =  addStudent($name, $roll, $age);
            if ($result) {
                header("location: index.php?task=report");
            }
            // else {
            //     header("location: index.php?task=report&error=1");
            // }
            else {
                $error = "1";
            }
        }
    }
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
    <title>CRUD Project</title>
</head>

<body>

    <section class="container">
        <h2>Project - 2 CRUD</h2>
        <!-- Import Nav File Start  -->
        <?php
        include_once "inc/templates/nav.php"
        ?>
        <!-- Import Nav File End  -->
        <?php
        if ($info != "") {

            echo "<p> $info</p>";
        }
        ?>
    </section>


    <section class="container">
        <div>
            <?php

            if ("report" === $task && $studentArr != "") {
                // print_r($studentArr);
            ?>
                <div>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        foreach ($studentArr as $student) {
                            foreach ($student as $stInfo) {
                                // print_r($stInfo);
                        ?>
                                <tr>
                                    <td>
                                        <p><?php echo $stInfo["id"] ?></p>
                                    </td>
                                    <td>
                                        <h4><?php echo $stInfo["name"] ?></h4>
                                    </td>
                                    <td>
                                        <p><?php echo $stInfo["roll"] ?></p>
                                    </td>
                                    <td>
                                        <p><?php echo $stInfo["age"] ?></p>
                                    </td>
                                    <td>
                                        <a href="/index.php?task=edit&id=<?php echo $stInfo["id"] ?>">Edit</a> |
                                        <a class="delete" href="/index.php?task=delete&id=<?php echo $stInfo["id"] ?>">Delete</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>

                    </table>
                </div>
            <?php

            }
            ?>
        </div>
    </section>

    <!-- Error Section Start  -->
    <section class="container">
        <?php

        if ("1" == $error) {
        ?>
            <blockquote style="color: red">Roll is Duplicate, try again</blockquote>
        <?php
        }
        ?>
    </section>
    <!-- Error Section End  -->

    <!-- Add Student Form Stat  -->
    <section class="container">
        <?php
        if ("add" === $task) {
        ?>
            <!-- <form action="index.php?report" method="POST"> -->
            <form action="index.php?task=add" method="POST">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="enter name" value="<?php echo $name ?>">
                <label for="roll">Roll</label>
                <input type="text" id="roll" name="roll" placeholder="enter roll" value="<?php echo $roll ?>">
                <label for="age">Age</label>
                <input type="text" id="age" name="age" placeholder="enter age" value="<?php echo $age ?>">
                <input type="submit" name="submit" value="Submit">
            </form>

        <?php
        }
        ?>
    </section>
    <!-- Add Student Form End  -->

    <!-- Edit Student Form Stat  -->
    <section class="container">
        <?php
        if ("edit" === $task) {
            $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);
            $student = getStudent($id);
            if ($student) {
        ?>
                <!-- <form action="index.php?report" method="POST"> -->
                <form action="index.php?task=edit" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="enter name" value="<?php echo $student["name"] ?>">
                    <label for="roll">Roll</label>
                    <input type="text" id="roll" name="roll" placeholder="enter roll" value="<?php echo $student["roll"] ?>" readonly>
                    <label for="age">Age</label>
                    <input type="text" id="age" name="age" placeholder="enter age" value="<?php echo $student["age"] ?>">
                    <input type="submit" name="submit" value="Update">
                </form>

        <?php
            }
        }
        ?>
    </section>
    <!-- Edit Student Form End  -->
    <script src="assets/js/script.js"></script>
</body>

</html>