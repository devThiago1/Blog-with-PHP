<?php 
    include '../config/connection.php';

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $stmt = $connection->prepare('INSERT INTO users(nome, login, senha) VALUES(:nome, :login,:senha)');

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);

    $stmt->execute();

    header('Location: index.php');
?>