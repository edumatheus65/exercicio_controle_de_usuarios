<?php


session_start();

include_once("conexao.php");
include_once("url.php");


$query = "SELECT * FROM  usuarios";

$stmt = $conn->prepare($query)

$stmt->execute();

$usuarios = $stmt->fetchAll();