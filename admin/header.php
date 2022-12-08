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
    <div class="container-fluid">
        <div class="row">   
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
                <h2>Bom dia, <?php echo $_SESSION['nome']; ?></h2>
                <p>
                    <a href="?sair">Deslogar</a>
                </p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-item">Dashboard</a>
                    </li>
                    <li class="nav-item" style="margin-top: 3%;">
                        <a href="insert.php" class="nav-item">Adicionar Postagem</a>
                    </li>
                    <li class="nav-item" style="margin-top: 3%;">
                        <a href="addcategory.php" class="nav-item">Adicionar Categorias</a>
                    </li>
               </ul>
            </nav>

            