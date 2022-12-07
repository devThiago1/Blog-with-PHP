<?php

include_once('../config/connection.php');

$id = $_GET['id'];

$stmt = $connection->prepare('SELECT id, title,text,image FROM posts WHERE id = :id');
$stmt->execute(array('id' => $id));

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cssadmin/viewBlog.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>Newsletter4devs</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-logo">
                <img src="./imagesadmin/logoadmin.png" style="max-height: 120px; margin-right: 4%;">
                <a class="nav-link  fs-2 text" id="name" aria-current="page" href="#" style="font-family: 'Share Tech Mono', monospace ;margin-top: 10%">Newsletter4devs</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php foreach($results as $post): ?>
            <h1 id="title"><?=$post["title"]?></h1>
            <p id="image">
                <img src="//uploads/<?=$post['image']?>" alt="<?=$post['title']?>">
            </p>
            <p id="text"><?=$post['text']?></p>
        <?php endforeach; ?>
    </div>
    
    <footer class="mt-5 p-5 bg-light">
        <div class="container">
            <p class="float-end mb-4">
                <a href="#"><img src="./imagesadmin/logoadmin.png" style="max-height: 90px;"></a>
            </p>
            <p class="mb-1">Todos os Direitos Reservados...</p>
            <p class="mb-0">
               <a href="https://github.com/devThiago1" style="text-decoration: none; list-style: none; color:black">
                    <i class="bi bi-github" ></i>
               </a>
               <a href="" style="text-decoration: none; List-style: none;color:black">
                    <i class="bi bi-twitter"></i>
               </a>
               <a href="https://www.instagram.com/thiago.calmon/?hl=pt-br" style="text-decoration: none; list-style: none;color:black">
                    <i class="bi bi-instagram"></i>
               </a>
            </p>
        </div>
    </footer>
</body>
</html>
