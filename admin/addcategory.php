<?php
    include_once("../config/connection.php");
    include_once("session.php");
    

    $stmt= $connection->prepare("SELECT * FROM category ORDER BY id_cat DESC");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./cssadmin/insert.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>ADM</title>
</head>
<body>
    <main>
        <div class="container">
            <h1 class="mt-5">Adicionar Categoria</h1>
                <div class="mb-3 mt-5">
                    <label for="formGroupExampleInput" class="form-label">Categorias Atuais:</label>
                    <select class="form-select" aria-label="Default select example" name="category">
                      <?php foreach ($results as $post): ?>
                        <option selected><?=$post['name_cat']?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
            <form action="enviacategory.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3" style="margin-top: 5%;">
                    <label for="formGroupExampleInput" class="form-label">Nova Categoria:</label>
                    <input type="text" class="form-control" name="category" id="formGroupExampleInput" placeholder="Insira o nome da categoria">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Adicionar</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>