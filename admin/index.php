<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./cssadmin/style-index.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>Login</title>
</head>
<body class="text-center" style="background: url('./imagesadmin/backgroundlogin.jpg')center;"> 
    <main class="form-login">
        <form action="logar.php" method="post" style="border-radius: 10px;">
            <img src="./imagesadmin/logoadmin.png" class="mb-4" width="70" height="70">
            <h3 class="h3">Admin Login</h3>
            <div class="col-sm-15">
                <label for="inputEmail4" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputEmail4" style="border-color: black;" name="login">
            </div>
            <div class="col-sm-15">
                <label for="inputEmail4" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" style="border-color: black;" name="senha">
            </div>
            <div class="col-sm-15" style="margin-top: 8%; margin-bottom: 5%;">
                <button class="btn btn-dark" type="submit">Login</button>
            </div>

            <div class="col-sm-15">
                <a href="cad_user.php">Não possui conta? Faça seu cadastro aqui!</a>
            </div>
        </form>
    </main> 
</body>
</html>