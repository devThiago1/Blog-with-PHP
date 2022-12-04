<?php 

    include_once('./config/connection.php');

    $buscar = $_POST['buscar'];
    $stmt = $connection->prepare("SELECT * FROM posts WHERE title LIKE '%$buscar%'");
    $stmt->execute();
    $search = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Data Control</title>
</head>
<body>
    <!-- NAVBAR -->
    <?php include ('./components/nav.php'); ?>

    <div class="container">
        <h2>Resultado da busca</h2>
        <?php foreach($search as $key => $value): ?>
            <h5 class="card-title">
                <a href="viewPost.php?id=<?=$value['id']?>">
                    <?=$value['title']?>
                </a>
            </h5>
        <?php endforeach; ?>
    </div>
</body>