<?php
include_once('../config/connection.php');
$stmt = $connection->prepare("DELETE FROM posts WHERE id = :ID");
$id = $_GET['id'];
$stmt->bindParam(":ID", $id);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./cssadmin/delete.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>Postagem deleteda</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-logo">
                <img src="./imagesadmin/logoadmin.png" style="max-height: 100px; margin-right: 4%;">
                <a class="nav-link  fs-2 text" id="name" aria-current="page" href="#" style="font-family: 'Share Tech Mono', monospace ;margin-top: 10%">Newsletter4devs</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="container-text">
            <a href="view2.php" class="voltar">
                <i class="bi bi-arrow-right-circle-fill"></i>
            </a>
        </div>
        <div class="container-message">
            <i class="bi bi-trash-fill" style="font-size:100px;display: flex; justify-content:center; margin-top: 5%; "></i>
            <p class="fs-2 text" style="display: flex; justify-content: center;">Postagem Deletada</p>
        </div>
    </div>
</body>
</html>
