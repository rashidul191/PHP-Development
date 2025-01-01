<?php
define('DB_HOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_NAME', "collage");

$mySqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = "SELECT * FROM students WHERE class=? AND section=?";
$stmt = $mySqli->prepare($query);

$class = 1;
$section = "D";

$stmt->bind_param("is", $class, $section);
$stmt->execute();

$result = $stmt->get_result();
// $data = $result->fetch_all(MYSQLI_NUM);
$data = $result->fetch_all(MYSQLI_ASSOC);

print_r($data);

// while ($data = $result->fetch_assoc()) {
//     print_r($data);
// }

$stmt->close();
