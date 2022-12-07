<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./cssadmin/cad_user.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>ADM</title>
</head>
<body class="text-center" style="background: url('./imagesadmin/backgroundlogin.jpg')center;">     
    <main class="form-login">
        <form action="cad_userOK.php" method="POST">
            <img src="./imagesadmin/logoadmin.png" class="mb-4" width="70" height="70">
            <h3 class="h3">Admin Cadastro</h3>
            <div class="col-sm-15">
                <label for="inputEmail4" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputEmail4" style="border-color: black;" name="nome">
            </div>
            <div class="col-sm-15">
                <label for="inputEmail4" class="form-label">Login</label>
                <input type="text" class="form-control" id="inputEmail4" style="border-color: black;" name="login">
            </div>
            <div class="col-sm-15">
                <label for="inputEmail4" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" style="border-color: black;" name="senha">
            </div>
            <div class="col-sm-15" style="margin-top: 8%;">
                <button class="btn btn-dark" type="submit">CADASTRAR</button>
            </div>
        </form>
    </main>
</body>