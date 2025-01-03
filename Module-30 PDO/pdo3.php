<?php
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=collage;charset=UTF8;", 'root', '');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if ($pdo) {
    $query = "SELECT * FROM students where class=? and section=?";
    $stmt = $pdo->prepare($query);
    $class = 1;
    $section = 'A';
    $stmt->bindParam(1, $class, PDO::PARAM_INT);
    $stmt->bindParam(2, $section, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll();
    print_r($result);
}
