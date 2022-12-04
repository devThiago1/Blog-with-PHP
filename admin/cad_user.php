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
    <form action="cad_userOK.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Digite o nome do usuário</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite o login do usuário</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite a senha do usuário</label>
            <input type="text" class="form-control" name="senha">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-dark">Cadastrar Usuário</button>
        </div>
    </form>
</body>