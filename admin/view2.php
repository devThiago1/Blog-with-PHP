<?php
    include_once("../config/connection.php");

    $stmt= $connection->prepare("SELECT * FROM posts ORDER BY id DESC");

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>Data Control</title>
</head>
<body>
    <main>
        <div class="container">
            <h1 id="main-title">Meus Posts</h1>

            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $post): ?>
                        <tr>
			                <td scope="row"><?= $post["id"] ?></td>
			                <td scope="row"><?= $post["title"] ?></td>
			                <td scope="row"><?= $post["description"] ?></td>
			                <td class="actions">
				                <a href="viewBlog.php?id=<?= $post["id"] ?>" style="text-decoration: none; list-style: none;color:black">
                                        <i class="bi bi-eye-fill"></i>
				                </a>
				                <a href="editar.php?id=<?= $post["id"] ?>" style="text-decoration: none; list-style: none;color:black">
                                        <i class="bi bi-pencil-fill"></i>
				                </a>
				                <a href="delete.php?id=<?= $post["id"] ?>" style="text-decoration: none; list-style: none;color:black">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
			                </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>