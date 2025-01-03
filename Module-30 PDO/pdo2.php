<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=collage;charset=UTF8;", 'root', '');

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if ($pdo) {
    $query = "SELECT * FROM students where class=? and section=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([1, 'A']);
    $result = $stmt->fetchAll();
    print_r($result);
}
