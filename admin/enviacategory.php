<?php
include_once('../config/connection.php');
$stmt = $connection->prepare("INSERT INTO category (name_cat) VALUES(:CATEGORY)");

$category = $_POST['category'];

$stmt->bindParam(":CATEGORY", $category);
$stmt->execute();

header("Location: view2.php");

?>