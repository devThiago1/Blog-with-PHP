<?php
    include_once("../config/connection.php");

    session_start();
        if($_SESSION['logado'] != true){
            header('Location: index.php');
            die();
        }

        if(isset($_GET['sair'])){
            session_destroy();
            header("Location: index.php");
            die();
        }

    $stmt= $connection->prepare("SELECT * FROM posts ORDER BY id DESC");

    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

    <?php include_once ("header.php"); ?>
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