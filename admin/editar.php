<?php 

    include_once("../config/connection.php");
    include_once("session.php");

    $id=$_GET['id'];
    
    $stmt = $connection->prepare('SELECT id,title,description,text FROM posts WHERE id=:id');

    $stmt->execute(array('id'=>$id));

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);




    include_once("header.php");
?>
    <main class="col-md-9 col-lg-10">
        <div class="container">
            <h1 id="main-title">
                Editar Post
            </h1>
            <form action="editar-fim.php" method="POST" enctype="multipart/form-data">
                <?php foreach($results as $post): ?>
                    <p><input type="hidden" value="<?=$post['id']?>" name="id"></p>
                    
                    <label for="formGroupExampleInput" class="form-label">Título</label>
                    <p><input type="text" value="<?=$post['title']?>" name="title"></p>
                    
                    <label for="formGroupExampleInput2" class="form-label">Descrição</label>
                    <p><textarea id="myTextarea" name="description" class="form-control" value="<?=$post{'description'}?>">Edite a descrição</textarea></p>

                    <label for="formGroupExampleInput2" class="form-label">Texto</label>
                    <p><textarea id="Text" name="text" class="form-control" value="<?=$post{'text'}?>">Edite o texto</textarea></p>
                <?php endforeach; ?>
                    <input type="submit" value="EDITAR">
            </form>
        </div>
    </main>
<?php 
    include "footer.php";
?>

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