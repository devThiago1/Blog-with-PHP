<?php
include_once("../config/connection.php");

    $stmt=$connection->prepare("INSERT INTO posts (title,description,data,image) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE)");

$title = $_POST['title'];
$data = $_POST['data'];
$description = $_POST['description'];
$arquivo = $_FILES["image"];

    move_uploaded_file($arquivo['tmp_name'],'../uploads/'.$arquivo['name']);

$image = 'uploads/'.$arquivo['name'];

$stmt->bindParam(":TITLE", $title);
$stmt->bindParam(":IMAGE", $image);
$stmt->bindParam(":DATA", $data);
$stmt->bindParam(":IMAGE", $image);

$stmt->execute();

header("Location: insert.php");
?>