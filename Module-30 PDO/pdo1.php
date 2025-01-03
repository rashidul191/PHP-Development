<?php
// DSN

define("DB_HOST", 'localhost');
define("PORT", '3306'); // mysql default port
define("DB_NAME", 'collage');
define("DB_USER", 'root');
define("DB_PASSWORD", '');
// port=3306; // mysql default port

// $pdo = new PDO("oracle:host=localhost;port=3306;dbname=collage;charset=UTF8;", 'local', 'local');
// $pdo = new PDO("sqlite:host=localhost;port=3306;dbname=collage;charset=UTF8;", 'local', 'local');
// $pdo = new PDO("mysql:host=localhost;port=3306;dbname=collage;charset=UTF8;", 'root', '');
$pdo = new PDO('mysql:host=' . DB_HOST . ';port=' . PORT . ';dbname=' . DB_NAME . ';charset=UTF8;', DB_USER, DB_PASSWORD);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if ($pdo) {
    $query = "SELECT * FROM students where class=2 and section= 'D'";
    $stmt = $pdo->query($query);
    // while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     print_r($data);
    // }

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($result);
}
