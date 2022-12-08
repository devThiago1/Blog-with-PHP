<?php

    include_once("../config/connection.php");

    $id=$_POST['id'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $text = $_POST['text'];

    $stmt = $connection->prepare('UPDATE posts SET id = :id, title = :title, description = :description, text = :text WHERE id = :id');

    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':text', $text);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Location: view2.php');
?>