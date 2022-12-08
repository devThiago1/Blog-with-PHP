
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
        <title>CATEGORIAS</title>
</head>
<body>
<?php 
    include_once('./config/connection.php');

    $cat=$_GET['cat'];
    $stmt = $connection->prepare('SELECT title, image, description,data FROM posts WHERE category = :cat');
    $stmt->execute(array('cat' => $cat));

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <!-- NAVBAR -->
    <?php include ('./components/nav.php'); ?>
    <div class="container">
		<div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($results as $post): ?>
		        <div class="col gy-5">
		            <div class="card">
		                    <img src="<?= $post["image"] ?>" class="card-img-top" alt="...">
		                <div class="card-body">
		                    <h5 class="card-title">
                                <?= $post['title'] ?>
                            </h5>
		                    <p class="card-text">
                                <?=$post['description']?>
                            </p>
                            <p>
                                <?=date('d/m/Y', strtotime($post['data'])); ?>
                            </p>
		                    <a href="viewPost.php?id=<?= $post["id"] ?>">
                                <i class="fas fa-eye check-icon">Mais</i>
                            </a>
		                </div>
		            </div>
		        </div>
            <?php endforeach; ?>
	    </div>
    </div>
</body>
