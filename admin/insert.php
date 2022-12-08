<?php
        include_once("session.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./cssadmin/insert.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <title>ADM</title>
</head>
<script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
    referrerpolicy="origin">
</script>
<script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    width: 600,
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#Text',
    width: 600,
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>
<body>
    <main>
        <div class="container">
            <h1 class="mt-5">Realizar Postagem</h1>
            <form action="envia.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Título</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Insira o título">
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="formGroupExampleInput2" class="form-label">Descrição</label>
                        <textarea id="myTextarea" name="description" class="form-control">Insira a descrição</textarea>
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput2" class="form-label">Texto</label>
                        <textarea id="Text" name="text" class="form-control">Insira o texto</textarea>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col">
                        <label for="formGroupExampleInput2" class="form-label">Data</label>
                        <input type="date" class="form-control" name="data" id="formGroupExampleInput2" placeholder="Insira a data">
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput2" class="form-label">Imagem</label>
                        <input type="file" class="form-control" name="image" id="formGroupExampleInput3" placeholder="Insira uma imagem">
                    </div>
                </div>
                <div class="mb-3 mt-4">
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option selected value="GERAL">Geral</option>
                        <option value="AI">AI</option>
                    </select>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Publicar</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>