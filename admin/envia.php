<?php
include_once('../config/connection.php');
$stmt = $connection->prepare("INSERT INTO posts (title, description, data, image, text, category) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE, :TEXT, :CATEGORY)");

$title = $_POST['title'];
$data = $_POST['data'];
$description = $_POST['description'];
$text = $_POST['text'];
$category = $_POST['category'];

$arquivo = $_FILES['image'];

move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);

$image = 'uploads/'.$arquivo['name'];


$stmt->bindParam(":TITLE", $title);
$stmt->bindParam(":DESCRIPTION", $description);
$stmt->bindParam(":DATA", $data);
$stmt->bindParam(":IMAGE", $image);
$stmt->bindParam(":TEXT", $text);
$stmt->bindParam(":CATEGORY", $category);
$stmt->execute();

header("Location: view2.php");

?>