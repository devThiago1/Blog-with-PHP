

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>Newsletter4devs</title>
</head>
<body>
    <?php 
        include_once 'config/connection.php';
        include "components/nav.php";

        $id =$_GET['id'];

        $stmt = $connection->prepare("SELECT * FROM posts WHERE id = :id");
        $stmt->execute(array('id'=>$id));


        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container">
        <?php foreach($results as $post):?>
            <h1><?=$post['title']?></h1>
            <p><?-date('d/m/Y', strtotime($post['data'])) ?></p>
            <p>
                <img src="<?=$post['image']?>" alt="<?=$post['title']?>">
            </p>
            <p><?=$post['description']?></p>
        <?php endforeach ?>
    </div>

    <?php include 'components/footer.php' ?>
</body>
</html>
