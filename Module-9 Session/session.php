<?php

session_name("myapp");
session_start();

$_SESSION["name"] = "rashidul";

// echo $_SESSION["name"];

$_SESSION['counter'] = $_SESSION['counter'] ?? 0;

$_SESSION['counter']++;


echo $_SESSION['counter'];
