<?php 
      $tocategory= $connection->prepare("SELECT * FROM category ORDER BY id_cat DESC");
      $tocategory->execute();
      $resultsToCategory = $tocategory->fetchALL(PDO::FETCH_ASSOC);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-logo" style="margin-right: 38%;">
                <img src="images/logo.png" style="max-height: 100px; margin-right: 5%;">
                <a class="nav-link  fs-3 text" id="name" aria-current="page" href="index.php" style="font-family: 'Share Tech Mono', monospace ;">Newsletter4devs</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-6">
                    <li class="nav-item fs-5">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown fs-5">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach($resultsToCategory as $category): ?>
                                <li>
                                    <a class="dropdown-item" href="category.php?cat=<?=$category['id_cat']?>"><?=$category['name_cat']?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
                <form action="buscar.php" method="POST" class="d-flex mb-lg-6 " role="search">
                    <input class="form-control me-2" type="search" aria-label="Search" name="buscar">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>