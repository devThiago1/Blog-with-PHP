<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/insert.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>ADM</title>
</head>
<body>
    <main>
        <div class="container">
            <h1 class="mt-5">Realizar Postagem</h1>
            <form action="envia.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Título</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Insira o título">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Descrição</label>
                    <input type="text" class="form-control" name="description" id="formGroupExampleInput2" placeholder="Insira a descrição" >
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Data</label>
                    <input type="date" class="form-control" name="data" id="formGroupExampleInput2" placeholder="Insira a data">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Imagem</label>
                    <input type="file" class="form-control" name="image" id="formGroupExampleInput3" placeholder="Insira uma imagem">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" >Publicar</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>