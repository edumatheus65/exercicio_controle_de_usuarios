<?php

$db = "daotest";
$host = "localhost";
$user = "eduardo";
$pass = "";

try {
    $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);



} catch (PDOException $e) {
    echo "DEU RUIM" . $e->getMessage();
}